<?php
namespace App\Services;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Entity\Producto;

// Declaramos la clase que servirá como lógica de negocio para el carrito
class CestaCompra {
    
    // Propiedad protegida para almacenar el servicio de gestión de peticiones/sesión
    protected $requestStack;
    // Array para guardar los objetos Producto, usando su código como clave
    protected $productos = [];
    // Array para guardar las cantidades, usando el código del producto como clave
    protected $unidades = [];

    // El constructor recibe el RequestStack automáticamente mediante la inyección de dependencias
    public function __construct(RequestStack $requestStack) {
        // Asignamos el servicio recibido a la propiedad de la clase para usarlo luego
        $this->requestStack = $requestStack;
    }

    // Método público para añadir múltiples productos a la vez desde un formulario
    public function cargar_productos(array $productos, array $unidades) {
        // Primero sincronizamos los datos locales con lo que ya haya guardado en la sesión
        $this->cargar_cesta();
        // Recorremos el array de productos usando un índice numérico tradicional
        for ($i = 0; $i < count($productos); $i++) {
            // Verificamos que la cantidad enviada para ese producto no sea cero
            if ($unidades[$i] != 0) {
                // Llamamos a la función interna de abajo para añadir este producto individualmente
                $this->cargar_producto($productos[$i], $unidades[$i]);
            }
        }
    }

    // Método para añadir o actualizar un único producto en el carrito
    public function cargar_producto(Producto $producto, int $unidad){ 
        // Obtenemos el código identificador único del objeto producto
        $codigo = $producto->getCodigo();
        // Comprobamos si el producto ya estaba previamente en el carrito (en el array de productos)
        if(array_key_exists($codigo, $this->productos)){
            // Si ya existía, simplemente sumamos las nuevas unidades a las que ya teníamos
            $this->unidades[$codigo] += $unidad;
        } else if($unidad != 0) {
            // Si es nuevo y la unidad es válida, guardamos el objeto producto en el array con su código
            $this->productos[$codigo] = $producto;
            // Guardamos también la cantidad inicial para ese código de producto
            $this->unidades[$codigo] = $unidad;
        }

        // Una vez modificado el estado interno, guardamos los cambios en la sesión de Symfony
        $this->guardar_cesta();
    }

    // Método interno para recuperar los datos del carrito almacenados en la sesión
    protected function cargar_cesta() {
        // Obtenemos el objeto de sesión actual a partir del RequestStack
        $sesion = $this->requestStack->getSession();
        // Verificamos si existen las claves 'productos' y 'unidades' en la sesión del usuario
        if($sesion->has('productos') && $sesion->has('unidades')){
            // Si existen, volcamos el contenido de la sesión a nuestras propiedades locales
            $this->productos = $sesion->get('productos');
            // Hacemos lo mismo con el array de cantidades
            $this->unidades = $sesion->get('unidades');
        } else {
            // Si no hay nada en sesión, nos aseguramos de que las propiedades sean arrays vacíos
            $this->productos = [];
            $this->unidades = [];
        }
        
    }

    // Método interno para persistir los datos actuales en la sesión del navegador
    protected function guardar_cesta() {
        // Accedemos a la sesión del usuario
        $sesion = $this->requestStack->getSession();
        // Guardamos el array de objetos Producto bajo la clave 'productos'
        $sesion->set('productos', $this->productos); 
        // Guardamos el array de cantidades bajo la clave 'unidades'
        $sesion->set('unidades', $this->unidades);
    }

    // Método para obtener la lista de objetos producto (actualiza desde sesión primero)
    public function get_productos() {
        // Forzamos la carga desde sesión para devolver datos actualizados
        $this->cargar_cesta();
        // Devolvemos el array asociativo de productos
        return $this->productos;
    }

    // Método para obtener las cantidades de cada producto
    public function get_unidades() {
        // Sincronizamos con la sesión actual
        $this->cargar_cesta();
        // Devolvemos el array asociativo de unidades
        return $this->unidades;
    }
    
    // Método para calcular el importe total monetario de toda la cesta
    public function calcular_coste()
    {
        // Inicializamos el acumulador del precio total a cero
        $resultado = 0;
        // Recorremos el array de productos obteniendo su código y el objeto producto
        foreach ($this->productos as $codigo_producto => $producto) {
            // Multiplicamos el precio unitario por las unidades guardadas para ese código y sumamos
            $resultado += $producto->getPrecio() * $this->unidades[$codigo_producto];
        }
        // Devolvemos el total final calculado
        return $resultado;
    }

    
    // Método para eliminar unidades de un producto o quitarlo totalmente
    public function eliminar_producto($codigo_producto, $unidades) {
        // Cargamos el estado actual del carrito desde la sesión
        $this->cargar_cesta();

        // Verificamos que el producto que se quiere eliminar realmente existe en la cesta
        if(array_key_exists($codigo_producto, $this->productos)){
            // Restamos la cantidad solicitada a las unidades actuales del producto
            $this->unidades[$codigo_producto] -= $unidades;

            // Si tras la resta el número es cero o negativo, procedemos a borrar el producto
            if($this->unidades[$codigo_producto] <= 0){
                // Eliminamos la entrada del producto en el array de unidades
                unset($this->unidades[$codigo_producto]);
                // Eliminamos el objeto producto del array de productos
                unset($this->productos[$codigo_producto]);
            }

            // Guardamos el estado resultante en la sesión para que el cambio sea permanente
            $this->guardar_cesta();
        }
    }
}