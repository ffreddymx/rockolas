<?php

class Marca{

    public $ID;
    public $Marca;



    public function __construct($ID,$marca,$tipo){

        $this->ID = $ID;
        $this->Marca = $marca;
        $this->Tipo = $tipo;

    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT id, Marca,Tipo FROM marca ");

        foreach ($sql->fetchAll() as $clientes) {
             $listaClientes[] = new Marca($clientes['id'],$clientes['Marca'],$clientes['Tipo']);
        }
        return $listaClientes;
    }



    public static function crearmarca($tipo,$marca){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into marca(Marca,Tipo) values(?,?)");
        $sql->execute(array($marca,$tipo));
    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM marca WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Marca($clientes['id'],$clientes['Marca'],$clientes['Tipo']);
    }


    public static function editar($id,$tipo,$marca){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE marca SET Marca=?,Tipo=? WHERE id = ? ");
        $sql->execute(array($marca,$tipo,$id)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM marca WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>