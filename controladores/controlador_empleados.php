
<?php
include_once "modelos/empleado.php";
include_once "conexion.php";

BD::crearInstancia();

class ControladorEmpleados{ 


    public function inicio(){

        $empleados = Empleado::consultar();
            
        include_once "vistas/empleados/inicio.php"; 
    }

    public function crear(){

        if($_POST){
            //print_r($_POST);
            $usuario = $_POST['nombre'];
            Empleado::crear($usuario);

        }
        include_once "vistas/empleados/crear.php";

    }

    public function editar(){

        if ($_POST) {
            # code...
            $id = $_POST['ID'];
            $nom = $_POST['nombre'];
            $ema = $_POST['email'];
            $tip = $_POST['tipo'];
            $dir = $_POST['direccion'];
            $use = $_POST['usuario'];
            $pas = $_POST['pass'];
            Empleado::editar2($id,$nom,$ema,$tip,$dir,$use,$pas);
            header("Location:./?controlador=empleados&accion=inicio");

        }

        $id = $_GET['ID'];
        $usuario = Empleado::editar($id);
        include_once "vistas/empleados/editar.php";

    }


}
?>