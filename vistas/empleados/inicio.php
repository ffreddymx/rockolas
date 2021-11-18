
<div class="card" style='margin-top:10px'  >
    <div class="card-header text-white bg-dark  ">
        Usuarios registrados en el Sistema
    </div>
    <div class="card-body">

            <a  name="" id="" class="btn btn-primary" href="?controlador=login&accion=crear">Nuevo Usuario</a>
            <div style="margin-top: 10px;" ></div>

            <?php

            include_once "tablas/classTablas.php";


            tablacuerpo::usuarios($empleados,1);

            ?>

    </div>
</div>




<!--

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
-->
<?php
//foreach($empleados as $empleado){
?>

<!--
        <tr>
            <td ><?php //echo $empleado->user; ?> </td>

            <td>editar | Borrar</td>
        </tr>
   -->     
<?php
//}
?>

<!--
    </tbody>
</table>
   --> 