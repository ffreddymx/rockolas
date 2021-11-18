<?php

class Color{

    public $ID;
    public $Color;



    public function __construct($ID,$color){

        $this->ID = $ID;
        $this->Color = $color;
    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM color ");

        foreach ($sql->fetchAll() as $clientes) {
             $listaClientes[] = new Color($clientes['id'],$clientes['Color']);
        }
        return $listaClientes;
    }



    public static function crearcolor($nom){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into color(Color) values(?)");
        $sql->execute(array($nom));

    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM color WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Color($clientes['id'],$clientes['Color']);
    }


    public static function editar($id,$nombre){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE color SET Color=? WHERE id = ? ");
        $sql->execute(array($nombre,$id)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM color WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>