<?php 
    require_once("./models/productos.php");
    class producto_controler{
        public static function productos(){
                $tablaproducto[]=["id_producto"=>"1","descripcion"=>"Figura 1 Shanks El Pelirojo","costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>" Cantidad en Existencia 3"];
                $tablaproducto[]=["id_producto"=>"2", "descripcion"=>"Figura 2 Luffy Hito Hito No Mi", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tablaproducto[]=["id_producto"=>"3", "descripcion"=>"Figura 3 Luffy & Ace", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tablaproducto[]=["id_producto"=>"4", "descripcion"=>"Figura 4 Jinbe el Caballero del Mar", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tablaproducto[]=["id_producto"=>"5", "descripcion"=>"Figura 5 Katakuri ", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tablaproducto[]=["id_producto"=>"6", "descripcion"=>"Figura 6 Walter d Law", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tablaproducto[]=["id_producto"=>"7", "descripcion"=>"Figura 7 Oden", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                $tablaproducto[]=["id_producto"=>"8", "descripcion"=>"Figura 8 Mihawk Ojos de Halcon", "costo_compra"=>"El Valor del Producto es de 35.95", "precio_venta"=>"El Valor Neto es de 37.25", "cantidad_en_existencia"=>"Cantidad en Existencia 4"];
                return $tablaproducto;  
        }
        public static function mostrar(){
            $obj = new productos($_POST["Id"],"","","","");
            $rest = $obj->buscar($_POST["Id"]);
            require_once("views/templates/navbar.php");
            require_once("views/templates/header.php");
            require_once("views/mostrarproducto.php");
        }
    }
?>