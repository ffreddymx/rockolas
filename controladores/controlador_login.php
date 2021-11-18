<?php

include_once "modelos/login.php";
include_once "conexion.php";

BD::crearInstancia();


class ControladorLogin{

    public function inicio(){

        if($_POST){
            $user = $_POST['usuario'];
            $pass = $_POST['pasword'];
           $conectado =  Login::conectar($user,$pass);
        }

        if($conectado==1){
            include_once "vistas/paginas/inicio.php";
            
        }

    }


    public function crear(){

        if ($_POST) {
            # code...
            $nom = $_POST['nombre'];
            $ema = $_POST['email'];
            $tip = $_POST['tipo'];
            $dir = $_POST['direccion'];
            $use = $_POST['usuario'];
            $pas = $_POST['pass'];

            Login::crearuser($nom,$ema,$tip,$dir,$use,$pas);
            header("Location:./?controlador=empleados&accion=inicio");
            //include_once "vistas/empleados/inicio.php"; 

        }

        include_once "vistas/login/crear.php";

    }


    public function editar(){

        $id = $_GET['ID'];
        Empleado::editar($id);
        include_once "vistas/empleados/editar.php";
    
    }


    public function eliminar(){

        $id = $_GET['ID'];
        Login::eliminar($id);
        header("Location:./?controlador=empleados&accion=inicio");

    }



    public function salir(){
        Login::salir();
        include_once "vistas/login/login.php";

    }




}


?>