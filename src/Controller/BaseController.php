<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Email;
use Symfony\Component\Mailer\Addres;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

#Entidades
use App\Entity\Categoria;
use App\Entity\Producto;
use App\Entity\Pedido;
use App\Entity\Usuario;
use App\Entity\PedidoProducto;
use App\Services\CestaCompra;

// Aplicamos seguridad a nivel de clase: solo usuarios logueados con ROLE_USER pueden entrar
#[IsGranted('ROLE_USER')]
final class BaseController extends AbstractController
{
    // Definimos la ruta para cuando un usuario intenta entrar donde no tiene permiso
    #[Route('/acceso-denegado', name: 'access_denied')]
    public function accessDenied(): Response
    {
        // Renderizamos la vista específica de error de acceso
        return $this->render('security/access_denied.html.twig');
    }
    
    // Ruta para mostrar todas las categorías disponibles en la tienda
    #[Route('/categorias', name: 'categorias')]
    public function mostrar_categorias(ManagerRegistry $doctrine): Response
    {
        // Consultamos a la base de datos todos los registros de la tabla Categoria
        $categorias = $doctrine->getRepository(Categoria::class)->findAll();
        // Cargamos la plantilla y le pasamos el array de categorías obtenido
        return $this->render('categorias/mostrar_categorias.html.twig', [
            'categorias' => $categorias,
        ]);
    }
    
    // Ruta que recibe el ID de una categoría para mostrar sus productos asociados
    #[Route('/productos/{categoria}', name: 'productos')]
    public function mostrar_productos(ManagerRegistry $em, int $categoria): Response
    {
        // Buscamos el objeto de la categoría específica por su ID primario
        $categoriaObjeto = $em->getRepository(Categoria::class)->find($categoria);

        // Comprobamos si la categoría existe en la base de datos
        if (!$categoriaObjeto) {
            // Si no existe, lanzamos un error 404 de página no encontrada
            throw $this->createNotFoundException("La categoría no existe");
        }

        // Obtenemos la colección de productos vinculados a esa categoría mediante la relación ORM
        $productos = $categoriaObjeto->getProductos();

        // Renderizamos la vista de productos pasando la lista obtenida
        return $this->render('productos/mostrar_productos.html.twig', [
            'productos' => $productos,
        ]);
    }
     
    // Ruta para procesar la adición de productos al carrito de compra
    #[Route('/anadir', name: 'anadir')]
    public function anadir_productos(ManagerRegistry $em, Request $request, CestaCompra $cesta): Response
    {
        // Recogemos todos los IDs de productos enviados por el formulario POST
        $productos_id = $request->request->all("productos_id");
        // Recogemos todas las cantidades (unidades) enviadas por el formulario POST
        $unidades = $request->request->all("unidades");
        
        // Buscamos en la base de datos todos los productos cuyos IDs coincidan con los recibidos
        $productos = $em->getRepository(Producto::class)->findBy(['id' => $productos_id]);
        // Llamamos al servicio de la cesta para que guarde estos objetos y sus cantidades en sesión
        $cesta->cargar_productos($productos, $unidades);

        // Extraemos solo los valores del array de productos para manejar sus índices
        $objetos_producto = array_values($productos);

        // Obtenemos el ID de la categoría del primer producto para saber a dónde redirigir
        $categoria_id = $objetos_producto[0]->getCategoria()->getId();

        // Redirigimos al usuario de vuelta a la lista de productos de esa misma categoría
        return $this->redirectToRoute("productos", [
            'categoria' => $categoria_id
        ]);
    }
   
    // Ruta para visualizar el contenido actual del carrito de la compra
    #[Route('/cesta', name: 'cesta')]
    public function cesta(CestaCompra $cesta): Response
    {
        // Obtenemos la lista de productos que el usuario ha guardado en su cesta
        $productos = $cesta->get_productos();

        // Comprobamos si el array de productos está vacío para controlar la vista
        $estaVacia = empty($productos);

        // Renderizamos la vista de la cesta enviando productos, unidades y el estado de la cesta
        return $this->render('cesta/mostrar_cesta.html.twig', [
            'productos'  => $productos,
            'unidades'   => $cesta->get_unidades(),
            'estaVacia'  => $estaVacia, 
        ]);
    }
    
    // Ruta para eliminar productos del carrito, solo accesible mediante método POST
    #[Route('/eliminar', name: 'eliminar', methods: ['POST'])]
    public function eliminar(Request $request, CestaCompra $cestaCompra)
    {
        // Capturamos el ID o código del producto que el usuario quiere quitar
        $codigo = $request->request->get('codigo_producto');
        // Capturamos cuántas unidades se desean restar o eliminar
        $unidades = $request->request->get('unidades');

        // Si el código existe, ejecutamos la lógica de borrado en el servicio de la cesta
        if ($codigo) {
            $cestaCompra->eliminar_producto($codigo, $unidades);
        }

        // Redirigimos de nuevo a la vista de la cesta para ver los cambios
        return $this->redirectToRoute('cesta');
    }
    
    // Ruta principal para procesar el pedido final y convertir la cesta en una compra real
    #[Route('/pedido', name: 'pedido')]
    public function pedido(CestaCompra $cesta, EntityManagerInterface $em, MailerInterface $mailer)
    {   
        // Inicializamos una variable de error a cero (sin errores)
        $error = 0;
        // Recuperamos los productos actuales de la sesión
        $productos = $cesta->get_productos();
        // Recuperamos las cantidades correspondientes a esos productos
        $unidades  = $cesta->get_unidades();
        
        // Inicializamos la variable pedido como nula para evitar fallos de referencia
        $pedido = $pedido ?? null;
        
        // Si el carrito está vacío, no se puede realizar un pedido
        if(count($productos) == 0){
            // Asignamos el código de error 1: Cesta vacía
            $error = 1;
        } else {
            // Creamos una nueva instancia de la entidad Pedido
            $pedido = new Pedido();
            // Calculamos el precio total mediante el servicio y lo asignamos al pedido
            $pedido->setCoste($cesta->calcular_coste());
            // Asignamos la fecha y hora actual del sistema al pedido
            $pedido->setFecha(new \DateTime());
            // Vinculamos el pedido con el objeto del usuario que está logueado actualmente
            $pedido->setUsuario($this->getUser());
            // Indicamos a Doctrine que queremos guardar este nuevo objeto Pedido
            $em->persist($pedido);
            

            // Recorremos cada producto que había en la cesta para crear el detalle del pedido
            foreach ($productos as $codigo_producto => $productoCesta) {
                // Creamos una nueva instancia de la relación PedidoProducto
                $pedidoProdudcto = new PedidoProducto();
                // Vinculamos esta línea de detalle con el pedido principal creado arriba
                $pedidoProdudcto->setPedido($pedido);
                
                // Buscamos el objeto producto real en la base de datos usando su ID
                $producto = $em->getRepository(Producto::class)->findBy(['id' => $productoCesta -> getId()])[0];
                        
                // Vinculamos el producto encontrado a esta línea de detalle
                $pedidoProdudcto->setProducto($producto);
                // Asignamos las unidades que el usuario compró de este producto concreto
                $pedidoProdudcto->setUnidades($unidades[$codigo_producto]);
                // Indicamos a Doctrine que guarde esta línea de detalle de pedido
                $em->persist($pedidoProdudcto);
            }
            try{
                // Ejecutamos todas las operaciones de guardado pendientes en la base de datos
                $em->flush();
            } catch (Exception $ex) {
                // Si algo falla en la base de datos, asignamos el código de error 2
                $error = 2;
            }
            
            // Si no ha ocurrido ningún error durante el proceso de guardado
            if(!$error){               
                // Obtenemos el ID del usuario actual
                $usuarioId = $this->getUser()->getId();        
                // Volvemos a cargar el objeto usuario desde el repositorio para asegurar los datos
                $usuario = $em ->getRepository(Usuario::class)->find($usuarioId);
                // Extraemos la dirección de correo electrónico del usuario
                $destinationEmail = $usuario->getEmail();
                
                // Creamos un nuevo objeto de correo electrónico basado en plantilla
                $email = (new TemplatedEmail())
                    // Configuramos el remitente con una dirección fija y un nombre
                    ->from(new Address('amontor1507@g.educaand.es', 'Tienda Online'))
                    // Configuramos el destinatario con el correo del usuario logueado
                    ->to(new Address($destinationEmail))
                    // Definimos el asunto del mensaje incluyendo el ID del pedido recién creado
                    ->subject('Confirmación de pedido #' . $pedido->getId())
                    // Indicamos qué archivo Twig se usará para el cuerpo del mensaje
                    ->htmlTemplate('correo.html.twig')
                    // Pasamos las variables necesarias a la plantilla del correo
                    ->context([
                        'pedido_id' => $pedido->getId(),
                        'productos' => $cesta->get_productos(),
                        'unidades'  => $cesta->get_unidades(),
                        'coste'     => $cesta->calcular_coste(),
                    ]);
                // Enviamos el correo electrónico a través del servicio Mailer
                $mailer->send($email);
            }           
        }
        
        // Renderizamos la vista de confirmación de pedido mostrando el ID del pedido o el error
        return $this->render('pedido/pedido.html.twig', [
            'pedido_id' => $pedido ? $pedido->getId() : null,
            'error' => $error
        ]);
    }
    
   // Ruta para consultar los pedidos realizados anteriormente por el usuario
   #[Route('/historial', name: 'historial')]
    public function historial(EntityManagerInterface $em): Response
    {
        // Obtenemos el objeto del usuario que tiene la sesión iniciada
        $usuario = $this->getUser();

        // Buscamos en la tabla Pedido todos los registros que pertenecen a este usuario
        $pedidos = $em->getRepository(Pedido::class)->findBy(
            ['usuario' => $usuario], // Filtramos por la columna usuario
            ['id' => 'DESC'] // Ordenamos de más reciente a más antiguo por ID
        );

        // Renderizamos la plantilla del historial pasando la lista de objetos de tipo Pedido
        return $this->render('pedido/historial.html.twig', [
            'pedidos' => $pedidos
        ]);
    }
    
}