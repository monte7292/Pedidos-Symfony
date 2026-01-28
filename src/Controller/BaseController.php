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

#[IsGranted('ROLE_USER')]
final class BaseController extends AbstractController
{
    #[Route('/categorias', name: 'categorias')]
    public function mostrar_categorias(ManagerRegistry $doctrine): Response
    {
        $categorias = $doctrine->getRepository(Categoria::class)->findAll();
        return $this->render('categorias/mostrar_categorias.html.twig', [
            'categorias' => $categorias,
        ]);
    }
    
    #[Route('/productos/{categoria}', name: 'productos')]
    public function mostrar_productos(ManagerRegistry $em, int $categoria): Response
    {
        $categoriaObjeto = $em->getRepository(Categoria::class)->find($categoria);

        // Si no existe la categoría → error controlado
        if (!$categoriaObjeto) {
            throw $this->createNotFoundException("La categoría no existe");
        }

        $productos = $categoriaObjeto->getProductos();

        return $this->render('productos/mostrar_productos.html.twig', [
            'productos' => $productos,
        ]);
    }
    
    //POR TERMINAR ESTE METODO, ME FALTA AÑADIR  
    #[Route('/anadir', name: 'anadir')]
    public function anadir_productos(ManagerRegistry $em, Request $request, CestaCompra $cesta): Response
    {
        $productos_id = $request->request->all("productos_id");
        $unidades = $request->request->all("unidades");
        
        
        // Obtener array de productos
        $productos = $em->getRepository(Producto::class)->findBy(['id' => $productos_id]);
        $cesta->cargar_productos($productos, $unidades);

        // Convertir array asociativo en array indexado
        $objetos_producto = array_values($productos);

        // Obtener ID de categoría del producto
        $categoria_id = $objetos_producto[0]->getCategoria()->getId();

        return $this->redirectToRoute("productos", [
            'categoria' => $categoria_id
        ]);
    }
    
    #[Route('/cesta', name: 'cesta')]
    public function cesta(CestaCompra $cesta): Response
    {
        return $this->render('cesta/mostrar_cesta.html.twig', [
            'productos' => $cesta->get_productos(),
            'unidades'  => $cesta->get_unidades(),
        ]);
    }
    
    #METODO PARA ACTUALIZAR LA CESTA
    #[Route('/eliminar', name: 'eliminar', methods: ['POST'])]
    public function eliminar(Request $request, CestaCompra $cestaCompra)
    {
        // Capturamos el código que ahora enviamos correctamente desde Twig
        $codigo = $request->request->get('codigo_producto');
        $unidades = $request->request->get('unidades');

        if ($codigo) {
            $cestaCompra->eliminar_producto($codigo, $unidades);
        }

        return $this->redirectToRoute('cesta');
    }
    
    //Cambiamos el Manager por el Entity ya que no nos dejaría utilizar el persist
    #[Route('/pedido', name: 'pedido')]
    public function pedido(CestaCompra $cesta, EntityManagerInterface $em, MailerInterface $mailer)
    {   
        //Iniciamos las variables
        $error = 0;
        $productos = $cesta->get_productos();
        $unidades  = $cesta->get_unidades();
        
        // Puede no existir pedido (cesta vacía), evitamos llamar a getId() sobre null
        $pedido = $pedido ?? null;
        
        if(count($productos) == 0){
            //Valor 1 cuando no hay productos en la cesta
            $error = 1;
        } else {
            //Generamos un nuevo objeto Pedido con sus Setters
            $pedido = new Pedido();
            $pedido->setCoste($cesta->calcular_coste());
            //Hacemos un objeto nuevo para poder conseguir la hora actual
            $pedido->setFecha(new \DateTime());
            $pedido->setUsuario($this->getUser());
            //Permance en espera con ese pedido
            $em->persist($pedido);
            

            //Hacemos un for para asignar los productos
            foreach ($productos as $codigo_producto => $productoCesta) {
                $pedidoProdudcto = new PedidoProducto();
                $pedidoProdudcto->setPedido($pedido);
                
                $producto = $em->getRepository(Producto::class)->findBy(['id' => $productoCesta -> getId()])[0];
                        
                $pedidoProdudcto->setProducto($producto);
                //Asignamos el codigo producto a las unidades
                $pedidoProdudcto->setUnidades($unidades[$codigo_producto]);
                //Generamos el persist
                $em->persist($pedidoProdudcto);
            }
            try{
                //El flush hace que se guarde en la base
                //Y genera una sesión.
                $em->flush();
            } catch (Exception $ex) {
                //Este error será porque falla el acceso a la BD
                $error = 2;
            }
            
            
            if(!$error){               
                //Obtenemos el usuario desde la sesión
                $usuarioId = $this->getUser()->getId();        
                $usuario = $em ->getRepository(Usuario::class)->find($usuarioId);
                //AQuí en vez de poner el usuario->getemail poner el correo con 'asdds@gmail.com'
                $destinationEmail = $usuario->getEmail();
                
                $email = (new TemplatedEmail())
                    //AL hacer el Nuevo objeto lo primero será el correo y lo segundo es el
                    //asunto basicamente lo que saldrá en la bandeja de entrada    
                    ->from(new Address('amontor1507@g.educaand.es', 'Tienda Online'))
                    ->to(new Address($destinationEmail))
                    ->subject('Confirmación de pedido #' . $pedido->getId())
                    ->htmlTemplate('correo.html.twig')
                    ->context([
                        'pedido_id' => $pedido->getId(),
                        'productos' => $cesta->get_productos(),
                        'unidades'  => $cesta->get_unidades(),
                        'coste'     => $cesta->calcular_coste(),
                    ]);
                $mailer->send($email);
            }           
        }
        
        
        return $this->render('pedido/pedido.html.twig', [
            'pedido_id' => $pedido ? $pedido->getId() : null,
            'error' => $error
        ]);
    } 
}
