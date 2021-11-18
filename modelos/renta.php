<?php

class Renta{

    public $ID;
    public $idrockola;
    public $idcliente;
    public $Cliente;
    public $Modelo;
    public $Descripcion;
    public $Cantidad;
    public $Horas;
    public $Costo;
    public $Fecha;


    public function __construct($ID,$idrockola,$idcliente,$cliente,$modelo,$descrip,$cantidad,$horas,$costo,$fecha){

        $this->ID = $ID;
        $this->idrockola = $idrockola;
        $this->idcliente = $idcliente;
        $this->Cliente = $cliente;
        $this->Modelo = $modelo;
        $this->Descripcion = $descrip;
        $this->Cantidad = $cantidad;
        $this->Horas = $horas;
        $this->Costo = $costo;
        $this->Fecha = $fecha;

    }

    //

    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT RR.id, RR.idrockola,RR.idcliente,CONCAT(C.Nombre,' ',C.Apellidos) as Cliente,R.Modelo,R.Descripcion,RR.Cantidad,RR.Horas,RR.Costo,RR.Fecha
        FROM renta as RR
        INNER JOIN rockola as R on R.id = RR.idrockola
        INNER JOIN clientes as C on C.id = RR.idcliente");

        foreach ($sql->fetchAll() as $clientes) {
             $listaClientes[] = new Renta($clientes['id'],$clientes['idrockola'],$clientes['idcliente'],$clientes['Cliente'],$clientes['Modelo'],$clientes['Descripcion'],$clientes['Cantidad'],$clientes['Horas'],$clientes['Costo'],$clientes['Fecha']);
        }
        return $listaClientes;
    }


    public static function crearproducto($rockola,$cliente,$cantidad,$hora,$costo,$fecha){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into renta(idrockola,idcliente,Cantidad,Fecha,Costo,Horas) values(?,?,?,?,?,?)");
        $sql->execute(array($rockola,$cliente,$cantidad,$fecha,$costo,$hora));
    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM renta WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Renta($clientes['id'],$clientes['idrockola'],$clientes['idcliente'],$clientes['idrockola'],$clientes['idcliente'],$clientes['idcliente'],$clientes['Cantidad'],$clientes['Horas'],$clientes['Costo'],$clientes['Fecha']);
    }

//idmarca	Modelo	Descripcion	Total 	
    public static function editar($id,$rockola,$cliente,$cantidad,$hora,$costo,$fecha){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE renta SET idrockola=?,idcliente=?,Cantidad=?,Fecha=?,Costo=?,Horas=? WHERE id = ? ");
        $sql->execute(array($rockola,$cliente,$cantidad,$fecha,$costo,$hora,$id)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM renta WHERE id = ? ");
        $sql->execute(array($id));
    }

}

?>