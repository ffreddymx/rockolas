<?php
//http://189.150.86.42/
include_once "modelos/color.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorColor{ 

    public function inicio(){

        $productos = Color::consultar();
        include_once "vistas/color/inicio.php"; 
    }


    public function crear(){

        if ($_POST) {
            # code...
            $nom = $_POST['color'];

            Color::crearcolor($nom);
            header("Location:./?controlador=color&accion=inicio");
        }

        include_once "vistas/color/crear.php";

    }


    public function buscar(){

        if ($_POST) {
            $id = $_POST['ID'];
            $nombre = $_POST['color'];

            Hardware::editar($id,$nombre);
            header("Location:./?controlador=color&accion=inicio");

        }

        $id = $_GET['ID'];
        $productos = Color::busqueda($id);
        include_once "vistas/color/editar.php";
    }


    public function eliminar(){
        $id = $_GET['ID'];
        Color::eliminar($id);
        header("Location:./?controlador=color&accion=inicio");

    }


}
