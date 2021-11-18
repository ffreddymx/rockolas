<?php

class Rockola{

    public $ID;
    public $idmarca;
    public $Marca;
    public $Modelo;
    public $Descripcion;
    public $Total;



    public function __construct($ID,$idmarca,$marca,$modelo,$descrip,$total){

        $this->ID = $ID;
        $this->idmarca = $idmarca;
        $this->Marca = $marca;
        $this->Modelo = $modelo;
        $this->Descripcion = $descrip;
        $this->Total = $total;
    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT R.id, R.idmarca, M.Marca, R.Modelo, R.Descripcion, R.Total
        FROM rockola as R 
        INNER JOIN marca as M on R.idmarca = M.id");

        foreach ($sql->fetchAll() as $clientes) {
             $listaClientes[] = new Rockola($clientes['id'],$clientes['idmarca'],$clientes['Marca'],$clientes['Modelo'],$clientes['Descripcion'],$clientes['Total']);
        }
        return $listaClientes;
    }


    public static function crearproducto($marca,$modelo,$descrip,$cantidad){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into rockola(idmarca,Modelo,Descripcion,Total) values(?,?,?,?)");
        $sql->execute(array($marca,$modelo,$descrip,$cantidad));
    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM rockola WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Rockola($clientes['id'],$clientes['idmarca'],$clientes['idmarca'],$clientes['Modelo'],$clientes['Descripcion'],$clientes['Total']);
    }

//idmarca	Modelo	Descripcion	Total 	
    public static function editar($id,$marca,$modelo,$descrip,$cantidad){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE rockola SET idmarca=?,Modelo=?,Descripcion=?,Total=? WHERE id = ? ");
        $sql->execute(array($marca,$modelo,$descrip,$cantidad,$id)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM rockola WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>