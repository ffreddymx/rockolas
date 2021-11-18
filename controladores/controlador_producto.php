<?php
//http://189.150.86.42/
include_once "modelos/producto.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorProducto{ 

    public function inicio(){

        $productos = Producto::consultar();
        include_once "vistas/producto/inicio.php"; 
    }


    public function crear(){

        if ($_POST) {
            $equipo = $_POST['equipo'];
            $descrip = $_POST['descripcion'];
            $cantidad = $_POST['cantidad'];
            $costo = $_POST['costo'];
            $fecha = $_POST['fecha'];

            Producto::crearproducto($equipo,$descrip,$cantidad,$costo,$fecha);
            header("Location:./?controlador=producto&accion=inicio");
        }

        include_once "vistas/producto/crear.php";

    }


    public function buscar(){

        if ($_POST) {
            $id = $_POST['ID'];
            $equipo = $_POST['equipo'];
            $descrip = $_POST['descripcion'];
            $cantidad = $_POST['cantidad'];
            $costo = $_POST['costo'];
            $fecha = $_POST['fecha'];
            Producto::editar($id,$equipo,$descrip,$cantidad,$costo,$fecha);
            header("Location:./?controlador=producto&accion=inicio");

        }

        $id = $_GET['ID'];
        $productos = Producto::busqueda($id);
        include_once "vistas/producto/editar.php";
    }


    public function eliminar(){
        $id = $_GET['ID'];
        Producto::eliminar($id);
        header("Location:./?controlador=producto&accion=inicio");

    }


}
