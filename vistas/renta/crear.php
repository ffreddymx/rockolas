<?php
include_once "conexion.php";

$conexionBD= BD::crearInstancia();
$consulta=$conexionBD->query("SELECT id,CONCAT(Modelo,' ',Descripcion) as Rockola from rockola ");
while($filas=$consulta->fetch()){
    $personas[]=$filas;
}

$consulta=$conexionBD->query("SELECT id,CONCAT(Nombre,' ',Apellidos) as Cliente from clientes ");
while($filas=$consulta->fetch()){
    $clientes[]=$filas;
}

?>

<div class="card">
    <div class="card-header">
       Rockolas en Almacen
    </div>
    <div class="card-body">

    <form action="" method="post">

    <div class="mb-3">
    <div class="mb-3">
    <label for="sexo" class="form-label">Rockola</label>
    <select class="form-select" name="rockola" id="rockola">
                        <option selected>Seleccione la Rockola</option>
                        <?php
                  foreach($personas as $rockola){ 
                    if( $productos->idrockola == $rockola['id'] ) 
                  echo "<option value='".$rockola['id']."' selected='selected'>".$rockola['Rockola']."</option>";
                  else
                  echo "<option value='".$rockola['id']."' >".$rockola['Rockola']."</option>";
                  }
                        ?>
                    </select>
    </div>
  </div>


  <div class="mb-3">
    <label for="sexo" class="form-label">cliente</label>
    <select class="form-select" name="cliente" id="cliente">
                        <option selected>Seleccione el Cliente</option>
                        <?php
                  foreach($clientes as $cliente){ 
                    if( $productos->idcliente == $cliente['id'] ) 
                  echo "<option value='".$cliente['id']."' selected='selected'>".$cliente['Cliente']."</option>";
                  else
                  echo "<option value='".$cliente['id']."' >".$cliente['Cliente']."</option>";
                  }
                        ?>
                    </select>
    </div>




  <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad:</label>
      <input type="text" class="form-control" value="" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="hora" class="form-label">Horas:</label>
      <input type="text" class="form-control" value="" name="hora" id="hora" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="costo" class="form-label">Costo:</label>
      <input type="text" class="form-control" value="" name="costo" id="costo" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha:</label>
      <input type="date" class="form-control" value="" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
    </div>

    <input name="" id="" class="btn btn-danger" type="submit" value="Guardar Cambios">
    <a href="?controlador=renta&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>