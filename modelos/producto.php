<?php

class Producto{

    public $ID;
    public $idequipo;
    public $Tipo;
    public $Descripcion;
    public $Cantidad;
    public $Costo;
    public $Total;
    public $Fecha;


    public function __construct($ID,$idequipo,$Tipo,$Descripcion,$Cantidad,$Costo,$Total,$Fecha){

        $this->ID = $ID;
        $this->idequipo = $idequipo;
        $this->Tipo = $Tipo;
        $this->Descripcion = $Descripcion;
        $this->Cantidad = $Cantidad;
        $this->Costo = $Costo;
        $this->Total = $Total;
        $this->Fecha = $Fecha;

    }


    public static function consultar(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT C.id, E.id as idequipo, E.Nombre as Tipo,C.Descripcion,C.Cantidad,C.Costo, FORMAT(C.Cantidad*C.Costo,2) as Total,Fecha
        FROM compras as C
        INNER JOIN tipohardware as E on E.id = C.idequipo");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
             $listaClientes[] = new Producto($clientes['id'],$clientes['idequipo'],$clientes['Tipo'],$clientes['Descripcion'],$clientes['Cantidad'],$clientes['Costo'],$clientes['Total'],$clientes['Fecha']);
        }
        return $listaClientes;
    }



    public static function crearproducto($equipo,$descrip,$cantidad,$costo,$fecha){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into compras(idequipo,Descripcion,Cantidad,Costo,Fecha) values(?,?,?,?,?)");
        $sql->execute(array($equipo,$descrip,$cantidad,$costo,$fecha));
    }


    public static function busqueda($id){ //no edita, solo busca el dato buscado por el ID
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * FROM compras WHERE id = ? ");
        $sql->execute(array($id));
        $clientes = $sql->fetch();
        return new Producto($clientes['id'],$clientes['idequipo'],$clientes['idequipo'],$clientes['Descripcion'],$clientes['Cantidad'],$clientes['Costo'],0,$clientes['Fecha']);
    }


    public static function busquedacli($id){ //no edita, solo busca el dato buscado por el ID
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT C.id, E.id as idequipo, E.Nombre as Tipo,C.Descripcion,C.Cantidad,C.Costo, FORMAT(C.Cantidad*C.Costo,2) as Total,Fecha
        FROM compras as C
        INNER JOIN tipohardware as E on E.id = C.idequipo where E.Nombre  like '%$id%'");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
            $listaClientes[] = new Producto($clientes['id'],$clientes['idequipo'],$clientes['Tipo'],$clientes['Descripcion'],$clientes['Cantidad'],$clientes['Costo'],$clientes['Total'],$clientes['Fecha']);

        }
        return $listaClientes;
    }


    public static function editar($id,$equipo,$descrip,$cantidad,$costo,$fecha){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("UPDATE compras SET idequipo=?,Descripcion=?,Cantidad=?,Costo=?,Fecha=? WHERE id = ? ");
        $sql->execute(array($equipo,$descrip,$cantidad,$costo,$fecha,$id)); 
    }


    public static function eliminar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM compras WHERE id = ? ");
        $sql->execute(array($id));
    }

    //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COTIZACION

    public static function cotizar($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into cotizar(idpro,fecha) values(?,?)");
        $sql->execute(array($id,date("Y/m/d")));
    }


    public static function cotizarvista(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT CC.id, E.id as idequipo, E.Nombre as Tipo,C.Descripcion,CC.Cantidad,C.Costo, FORMAT(CC.Cantidad*C.Costo,2) as Total,CC.Fecha
        FROM compras as C
        INNER JOIN tipohardware as E on E.id = C.idequipo
        INNER JOIN COTIZAR as CC on CC.idpro = C.id");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
             $listaClientes[] = new Producto($clientes['id'],$clientes['idequipo'],$clientes['Tipo'],$clientes['Descripcion'],$clientes['Cantidad'],$clientes['Costo'],$clientes['Total'],$clientes['Fecha']);
        }
        return $listaClientes;
    }


    public static function quitarcoti($id){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM cotizar WHERE id = ? ");
        $sql->execute(array($id));
    }


    public static function consultarcotizacion(){
        $listaClientes = [];
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->query("SELECT C.id, E.id as idequipo, E.Nombre as Tipo,C.Descripcion,C.Cantidad,C.Costo, FORMAT(C.Cantidad*C.Costo,2) as Total,Fecha
        FROM compras as C
        INNER JOIN tipohardware as E on E.id = C.idequipo");

        foreach ($sql->fetchAll() as $clientes) {
            # code...va como esta en la BD
             $listaClientes[] = new Producto($clientes['id'],$clientes['idequipo'],$clientes['Tipo'],$clientes['Descripcion'],$clientes['Cantidad'],$clientes['Costo'],$clientes['Total'],$clientes['Fecha']);
        }
        return $listaClientes;
    }



}

?>