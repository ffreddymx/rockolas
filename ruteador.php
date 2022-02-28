

<?php if( $controlador !='paginas' and $_GET['accion'] !='salir' ){ ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio2"> <img src="statics/logo.png" width="90" alt="">  <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="?controlador=empleados&accion=inicio">Usuarios</a>
        <a class="nav-item nav-link" href="?controlador=clientes&accion=inicio">Clientes</a>
        <a class="nav-item nav-link" href="?controlador=producto&accion=inicio">Productos</a>
        <a class="nav-item nav-link" href="?controlador=rockola&accion=inicio">Rockolas</a>
        <a class="nav-item nav-link" href="?controlador=renta&accion=inicio">Rentas</a>
        <a class="nav-item nav-link" href="?controlador=producto&accion=cotizarvista">Cotizar</a>
        <a class="nav-item nav-link" href="?controlador=config&accion=config">Configuración</a>
        <a class="nav-item nav-link" href="?controlador=login&accion=salir">Salir</a>
    </div>
</nav>

</head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-12">
<?php
}

//}else header("Location:./?controlador=login&accion=salir");
//mecanismo
include_once "controladores/controlador_".$controlador.".php";
$objControlador = "Controlador".ucfirst($controlador);

$controlador = new $objControlador();
$controlador->$accion();

?>