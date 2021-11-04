<?php
//http://189.150.86.42/
include_once "modelos/clientes.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorClientes{ 

    public function inicio(){

        $clientes = clientes::consultar();
        include_once "vistas/clientes/inicio.php"; 
    }


    public function crear(){

        if ($_POST) {
            # code...
            $nom = $_POST['nombre'];
            $ape = $_POST['apellido'];
            $tel = $_POST['telefono'];
            $ema = $_POST['email'];
            $sex = $_POST['sexo'];
            $dir = $_POST['direccion'];

            Clientes::crearcliente($nom,$ape,$ema,$tel,$sex,$dir);
            header("Location:./?controlador=clientes&accion=inicio");
        }

        include_once "vistas/clientes/crear.php";

    }

    public function buscar(){

        if ($_POST) {
            # code...$ID,$Nombre,$Apellidos,$Sexo,$Telefono,$Email,$Direccion
            $id = $_POST['ID'];
            $nom = $_POST['nombre'];
            $ape = $_POST['apellido'];
            $tel = $_POST['telefono'];
            $ema = $_POST['email'];
            $sex = $_POST['sexo'];
            $dir = $_POST['direccion'];
            Clientes::editar($id,$nom,$ape,$sex,$tel,$ema,$dir);
            header("Location:./?controlador=clientes&accion=inicio");

        }

        $id = $_GET['ID'];
        $clientes = Clientes::busqueda($id);
        include_once "vistas/clientes/editar.php";

    }

    public function eliminar(){

        $id = $_GET['ID'];
        Clientes::eliminar($id);
        header("Location:./?controlador=clientes&accion=inicio");

    }


}
