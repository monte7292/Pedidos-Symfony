<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\RequestStack;
use App\Entity\Producto;

class CestaCompra {
    
    protected $requestStack;
    protected $productos = [];
    protected $unidades = [];

    public function __construct(RequestStack $requestStack) {
        $this->requestStack = $requestStack;
    }

    // Cargar varios productos
    public function cargar_productos(array $productos, array $unidades) {
        for ($i = 0; $i < count($productos); $i++) {
            if ($unidades[$i] != 0) {
                $this->cargar_producto($productos[$i], $unidades[$i]);
            }
        }
    }

    // Cargar un producto en la cesta
    public function cargar_producto(Producto $producto, int $unidad){
        $this->cargar_cesta();
        $codigo = $producto->getId();

        if(isset($this->unidades[$codigo])){
            $this->unidades[$codigo] += $unidad;
        } else {
            $this->productos[$codigo] = $producto;
            $this->unidades[$codigo] = $unidad;
        }

        $this->guardar_cesta();
    }

    // Cargar cesta desde sesión
    protected function cargar_cesta() {
        $sesion = $this->requestStack->getSession();
        $this->productos = $sesion->get('productos', []);
        $this->unidades = $sesion->get('unidades', []);
    }

    // Guardar cesta en sesión
    protected function guardar_cesta() {
        $sesion = $this->requestStack->getSession();
        $sesion->set('productos', $this->productos);
        $sesion->set('unidades', $this->unidades);   
    }

    // Obtener productos
    public function get_productos() {
        $this->cargar_cesta();
        return $this->productos;
    }

    // Obtener unidades
    public function get_unidades() {
        $this->cargar_cesta();
        return $this->unidades;
    }
}
