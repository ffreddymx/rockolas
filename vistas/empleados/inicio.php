
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Usuario</th>

            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php

foreach($empleados as $empleado){
?>


        <tr>
            <td ><?php echo $empleado->user; ?> </td>

            <td>editar | Borrar</td>
        </tr>
<?php
}
?>


    </tbody>
</table>
