<?php

class Empleado{

    public $ID;
    public $Nombre;
    public $Email;
    public $Tipo;
    public $Direccion;
    Public $Usuario;
    public $Password;

    public function __construct($ID,$Nombre,$Email,$Tipo,$Direccion,$Usuario,$Password){

        $this->ID = $ID;
        $this->Nombre = $Nombre;
        $this->Email = $Email;
        $this->Tipo = $Tipo;
        $this->Direccion = $Direccion;
        $this->Usuario = $Usuario;
        $this->Password = $Password;
    }

    public static function consultar(){

        $listaEmepleados = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * from user");

        foreach ($sql->fetchAll() as $empleado) {
            # code...
    $listaEmepleados[] = new Empleado($empleado['Id'],$empleado['Nombre'],$empleado['Email'],$empleado['Tipo'],$empleado['Direccion'],$empleado['usuario'],$empleado['password']);

        }

        return $listaEmepleados;
    }


    public static function crear($nombre){

        $conexion= BD::crearInstancia();

        $sql = $conexion->prepare("INSERT INTO user(usuario) values(?)" );
        $sql->execute(array($nombre)); 
    }


    public static function editar($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM user WHERE Id = ? ");
        $sql->execute(array($id));
        $empleado = $sql->fetch();
        return new Empleado($empleado['Id'],$empleado['Nombre'],$empleado['Email'],$empleado['Tipo'],$empleado['Direccion'],$empleado['usuario'],$empleado['password']);
    }


    public static function editar2($ID,$Nombre,$Email,$Tipo,$Direccion,$Usuario,$Password){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE user SET usuario=?,password=?,Tipo=?,Nombre=?,Email=?,Direccion=? WHERE Id = ? ");
        $sql->execute(array($Usuario,$Password,$Tipo,$Nombre,$Email,$Direccion,$ID)); 
    }


}



?>