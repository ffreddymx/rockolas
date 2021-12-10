<?php
//http://189.150.86.42/
include_once "modelos/renta.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorRenta{ 

    public function inicio(){

        $productos = Renta::consultar();
        include_once "vistas/renta/inicio.php"; 

    }


    public function crear(){

        if ($_POST) {
            $rockola = $_POST['rockola'];
            $cliente = $_POST['cliente'];
            $cantidad = $_POST['cantidad'];
            $fecha = $_POST['fecha'];

            Renta::crearproducto($rockola,$cliente,$cantidad,$fecha);
            header("Location:./?controlador=renta&accion=inicio");
        }

        include_once "vistas/renta/crear.php";

    }


    public function buscar(){

        if ($_POST) {
            $id = $_POST['ID'];
            $rockola = $_POST['rockola'];
            $cliente = $_POST['cliente'];
            $cantidad = $_POST['cantidad'];
            $fecha = $_POST['fecha'];

            Renta::editar($id,$rockola,$cliente,$cantidad,$fecha);
            header("Location:./?controlador=renta&accion=inicio");

        }

        $id = $_GET['ID'];
        $productos = Renta::busqueda($id);
        include_once "vistas/renta/editar.php";
    }


    public function eliminar(){
        $id = $_GET['ID'];
        Renta::eliminar($id);
        header("Location:./?controlador=renta&accion=inicio");

    }


}
