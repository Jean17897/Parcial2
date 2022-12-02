<?php
    class productos {
        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad_en_existencia;
    
    public function __construct($id_producto, $descripcion, $costo_compra, $precio_venta, $cantidad_en_existencia){
        $this->id_producto = $id_producto;
        $this->descripcion = $descripcion;
        $this->costo_compra = $costo_compra;
        $this->precio_venta = $precio_venta;
        $this->cantidad_en_existencia = $cantidad_en_existencia;
    } 
    public function buscar($id){
                $tabla[]=["id_producto"=>"1","descripcion"=>"Figura 1 Shanks El Pelirojo","costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>" Cantidad en Existencia 3"];
                $tabla[]=["id_producto"=>"2", "descripcion"=>"Figura 2 Luffy Hito Hito No Mi", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tabla[]=["id_producto"=>"3", "descripcion"=>"Figura 3 Luffy & Ace", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tabla[]=["id_producto"=>"4", "descripcion"=>"Figura 4 Jinbe el Caballero del Mar", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tabla[]=["id_producto"=>"5", "descripcion"=>"Figura 5 Katakuri ", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tabla[]=["id_producto"=>"6", "descripcion"=>"Figura 6 Walter d Law", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tabla[]=["id_producto"=>"7", "descripcion"=>"Figura 7 Oden", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tabla[]=["id_producto"=>"8", "descripcion"=>"Figura 8 Mihawk Ojos de Halcon", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
        foreach($tabla as $tl) {
            if($id== $tl["id_producto"])
                return $tl;
        }
        return[];
    }   
    }
?> 