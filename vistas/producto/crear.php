<?php

include_once "conexion.php";

$conexionBD= BD::crearInstancia();
$consulta=$conexionBD->query("SELECT id,Nombre from tipohardware");
while($filas=$consulta->fetch()){
    $personas[]=$filas;
}
?>

<div class="card">
    <div class="card-header">
       Compras - Agregar productos adquiridos
    </div>
    <div class="card-body">

    <form action="" method="post">


    <div class="mb-3">
    <div class="mb-3">
    <label for="sexo" class="form-label">Equipos</label>
    <select class="form-select" name="equipo" id="equipo">
                        <option selected>Seleccionar Equipo</option>
                        <?php
                  foreach($personas as $perso){ 
                    if( $productos->idequipo == $perso['id'] ) 
                  echo "<option value='".$perso['id']."' selected='selected'>".$perso['Nombre']."</option>";
                  else
                  echo "<option value='".$perso['id']."' >".$perso['Nombre']."</option>";
                  }
                        ?>
                    </select>
    </div>
  </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion:</label>
      <input type="text" class="form-control" value="" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad:</label>
      <input type="text" class="form-control" value="" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="costo" class="form-label">Costo</label>
      <input type="text" class="form-control" value="" name="costo" id="costo" aria-describedby="emailHelpId" placeholder="">
    </div>



    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha:</label>
      <input type="date" class="form-control" value="" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
    </div>



    <input name="" id="" class="btn btn-danger" type="submit" value="Guardar">
    <a href="?controlador=producto&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>