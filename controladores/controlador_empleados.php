
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

        include_once "vistas/empleados/editar.php";

    }


}
?>