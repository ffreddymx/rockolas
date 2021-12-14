<?php

class Clientes{

    public $ID;
    public $Nombre;
    public $Apellidos;
    public $Sexo;
    public $Email;
    public $Telefono;
    public $Direccion;
    public $Bar;


    public function __construct($ID,$Nombre,$Apellidos,$Sexo,$Email,$Telefono,$Direccion,$Bar){

        $this->ID = $ID;
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Sexo = $Sexo;
        $this->Email = $Email;
        $this->Telefono = $Telefono;
        $this->Direccion = $Direccion;
        $this->Bar = $Bar;

    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * from clientes");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
    $listaClientes[] = new Clientes($clientes['id'],$clientes['Nombre'],$clientes['Apellidos'],$clientes['Sexo'],$clientes['Email'],$clientes['Telefono'],$clientes['Direccion'],$clientes['Bar']);

        }
        return $listaClientes;
    }


    public static function crearcliente($nom,$ape,$ema,$tel,$sex,$dir,$bar){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into clientes(Nombre,Apellidos,Sexo,Telefono,Email,Direccion,Bar) values(?,?,?,?,?,?,?)");
        $sql->execute(array($nom,$ape,$sex,$tel,$ema,$dir,$bar));

    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM clientes WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Clientes($clientes['id'],$clientes['Nombre'],$clientes['Apellidos'],$clientes['Sexo'],$clientes['Email'],$clientes['Telefono'],$clientes['Direccion'],$clientes['Bar']);
    }


    public static function busquedacli($id){ //no edita, solo busca el dato buscado por el ID
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * from clientes where Nombre like '%$id%'");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
    $listaClientes[] = new Clientes($clientes['id'],$clientes['Nombre'],$clientes['Apellidos'],$clientes['Sexo'],$clientes['Email'],$clientes['Telefono'],$clientes['Direccion'],$clientes['Bar']);

        }
        return $listaClientes;
    }



    public static function editar($ID,$Nombre,$Apellidos,$Sexo,$Telefono,$Email,$Direccion,$Bar){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE clientes SET Nombre=?,Apellidos=?,Sexo=?,Telefono=?,Email=?,Direccion=?,Bar=? WHERE id = ? ");
        $sql->execute(array($Nombre,$Apellidos,$Sexo,$Telefono,$Email,$Direccion,$Bar,$ID)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM clientes WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>