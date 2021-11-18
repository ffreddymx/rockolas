<?php

class Login{


    public $pass;
    public $user;

    public function __construct($pass,$user){

        $this->pass = $pass;
        $this->user = $user;

    }

    public static function conectar($pass,$user){
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT * from user where usuario = ? and password = ? ");
        $sql->execute(array($user,$pass)); 

        if($sql->fetch()){

            if(!isset($_SESSION)) 
                { 
                    session_start(); 
                } 
    
         $_SESSION["logeado"] = 1;
            return 1;
        }
         else return 0;
    }


    public static function crearuser($nom,$ema,$tip,$dir,$use,$pas){
        
        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("INSERT into user(Nombre,Email,Tipo,Direccion, usuario,password) values(?,?,?,?,?,?) ");
        $sql->execute(array($nom,$ema,$tip,$dir,$use,$pas));

    }


    public static function eliminar($id){

        $conexionBD= BD::crearInstancia();
        $sql = $conexionBD->prepare("DELETE FROM user WHERE Id = ? ");
        $sql->execute(array($id));
    }


    public static function salir(){
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }         session_destroy();
       // header("location:../index.php");
    }




}




?>