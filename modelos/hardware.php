<?php

class Hardware{

    public $ID;
    public $Nombre;



    public function __construct($ID,$nombre){

        $this->ID = $ID;
        $this->Nombre = $nombre;
    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM tipohardware ");

        foreach ($sql->fetchAll() as $clientes) {
             $listaClientes[] = new Hardware($clientes['id'],$clientes['Nombre']);
        }
        return $listaClientes;
    }



    public static function crearhardware($nom){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into tipohardware(Nombre) values(?)");
        $sql->execute(array($nom));

    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM tipohardware WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Hardware($clientes['id'],$clientes['Nombre']);
    }


    public static function editar($id,$nombre){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE tipohardware SET Nombre=? WHERE id = ? ");
        $sql->execute(array($nombre,$id)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM tipohardware WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>