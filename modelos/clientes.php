<?php

class Clientes{

    public $ID;
    public $Nombre;
    public $Apellidos;
    public $Sexo;
    public $Email;
    public $Telefono;
    public $Direccion;


    public function __construct($ID,$Nombre,$Apellidos,$Sexo,$Email,$Telefono,$Direccion){

        $this->ID = $ID;
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Sexo = $Sexo;
        $this->Email = $Email;
        $this->Telefono = $Telefono;
        $this->Direccion = $Direccion;

    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * from clientes");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
    $listaClientes[] = new Clientes($clientes['id'],$clientes['Nombre'],$clientes['Apellidos'],$clientes['Sexo'],$clientes['Email'],$clientes['Telefono'],$clientes['Direccion']);

        }
        return $listaClientes;
    }


    public static function crearcliente($nom,$ape,$ema,$tel,$sex,$dir){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into clientes(Nombre,Apellidos,Sexo,Telefono,Email,Direccion) values(?,?,?,?,?,?)");
        $sql->execute(array($nom,$ape,$sex,$tel,$ema,$dir));

    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM clientes WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Clientes($clientes['id'],$clientes['Nombre'],$clientes['Apellidos'],$clientes['Sexo'],$clientes['Email'],$clientes['Telefono'],$clientes['Direccion']);
    }


    public static function editar($ID,$Nombre,$Apellidos,$Sexo,$Telefono,$Email,$Direccion){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE clientes SET Nombre=?,Apellidos=?,Sexo=?,Telefono=?,Email=?,Direccion=? WHERE id = ? ");
        $sql->execute(array($Nombre,$Apellidos,$Sexo,$Telefono,$Email,$Direccion,$ID)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM clientes WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>