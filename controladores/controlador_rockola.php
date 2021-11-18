<?php
//http://189.150.86.42/
include_once "modelos/rockola.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorRockola{ 

    public function inicio(){

        $productos = Rockola::consultar();
        include_once "vistas/rockola/inicio.php"; 
    }


    public function crear(){

        if ($_POST) {
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $descrip = $_POST['descripcion'];
            $cantidad = $_POST['cantidad'];

            Rockola::crearproducto($marca,$modelo,$descrip,$cantidad);
            header("Location:./?controlador=rockola&accion=inicio");
        }

        include_once "vistas/rockola/crear.php";

    }


    public function buscar(){

        if ($_POST) {
            $id = $_POST['ID'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $descrip = $_POST['descripcion'];
            $cantidad = $_POST['cantidad'];

            Rockola::editar($id,$marca,$modelo,$descrip,$cantidad);
            header("Location:./?controlador=rockola&accion=inicio");

        }

        $id = $_GET['ID'];
        $productos = Rockola::busqueda($id);
        include_once "vistas/rockola/editar.php";
    }


    public function eliminar(){
        $id = $_GET['ID'];
        Rockola::eliminar($id);
        header("Location:./?controlador=rockola&accion=inicio");

    }


}
