<?php
//http://189.150.86.42/
include_once "modelos/hardware.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorHardware{ 

    public function inicio(){

        $productos = Hardware::consultar();
        include_once "vistas/hardware/inicio.php"; 

    }


    public function crear(){

        if ($_POST) {
            # code...
            $nom = $_POST['nombre'];

            Hardware::crearhardware($nom);
            header("Location:./?controlador=hardware&accion=inicio");
        }

        include_once "vistas/hardware/crear.php";

    }


    public function buscar(){

        if ($_POST) {
            $id = $_POST['ID'];
            $nombre = $_POST['nombre'];

            Hardware::editar($id,$nombre);
            header("Location:./?controlador=hardware&accion=inicio");

        }

        $id = $_GET['ID'];
        $productos = Hardware::busqueda($id);
        include_once "vistas/hardware/editar.php";
    }


    public function eliminar(){
        $id = $_GET['ID'];
        Hardware::eliminar($id);
        header("Location:./?controlador=hardware&accion=inicio");

    }


}
