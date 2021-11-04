<?php

class ControladorPaginas{
    public function inicio(){

        //include_once "vistas/paginas/inicio.php";
        include_once "vistas/login/login.php";
        //include_once "vistas/usuario/login.php";

    }

    public function inicio2(){

        include_once "vistas/paginas/inicio.php";

    }

    public function error(){

        include_once "vistas/paginas/error.php";

    }
}


?>