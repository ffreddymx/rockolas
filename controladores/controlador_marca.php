<?php
//http://189.150.86.42/
include_once "modelos/marca.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorMarca{ 

    public function inicio(){

        $productos = Marca::consultar();
        include_once "vistas/marca/inicio.php"; 
    }


    public function crear(){

        if ($_POST) {
            $tipo = $_POST['tipo'];
            $marca = $_POST['marca'];

            Marca::crearmarca($tipo,$marca);
            header("Location:./?controlador=marca&accion=inicio");
        }

        include_once "vistas/marca/crear.php";

    }


    public function buscar(){

        if ($_POST) {
            $id = $_POST['ID'];
            $tipo = $_POST['tipo'];
            $marca = $_POST['marca'];

            Marca::editar($id,$tipo,$marca);
            header("Location:./?controlador=marca&accion=inicio");

        }

        $id = $_GET['ID'];
        $productos = Marca::busqueda($id);
        include_once "vistas/marca/editar.php";
    }


    public function eliminar(){
        $id = $_GET['ID'];
        Marca::eliminar($id);
        header("Location:./?controlador=marca&accion=inicio");

    }


}
