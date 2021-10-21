<?php

class Empleado{

    public $user;

    public function __construct($user){

        $this->user = $user;
    }

    public static function consultar(){

        $listaEmepleados = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * from user");

        foreach ($sql->fetchAll() as $empleado) {
            # code...
            $listaEmepleados[] = new Empleado($empleado['usuario']);

        }

        return $listaEmepleados;
    }




    public static function crear($nombre){

        $conexion= BD::crearInstancia();

        $sql = $conexion->prepare("INSERT INTO user(usuario) values(?)" );
        $sql->execute(array($nombre)); 
    }

}



?>