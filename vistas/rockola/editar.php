<?php

include_once "conexion.php";

$conexionBD= BD::crearInstancia();
$consulta=$conexionBD->query("SELECT id,Marca,Tipo from marca where Tipo='R'");
while($filas=$consulta->fetch()){
    $personas[]=$filas;
}
?>

<div class="card">
    <div class="card-header">
       Rockolas en Almacen
    </div>
    <div class="card-body">

    <form action="" method="post">

    <input type="hidden" name="ID" value="<?php echo $productos->ID; ?>" >

    <div class="mb-3">
    <div class="mb-3">
    <label for="sexo" class="form-label">Marcas</label>
    <select class="form-select" name="marca" id="marca">
                        <option selected>Seleccionar la Marca</option>
                        <?php
                  foreach($personas as $rockola){ 
                    if( $productos->idmarca == $rockola['id'] ) 
                  echo "<option value='".$rockola['id']."' selected='selected'>".$rockola['Marca']."</option>";
                  else
                  echo "<option value='".$rockola['id']."' >".$rockola['Marca']."</option>";
                  }
                        ?>
                    </select>
    </div>
  </div>


  <div class="mb-3">
      <label for="modelo" class="form-label">Modelo:</label>
      <input type="text" class="form-control" value="<?php echo $productos->Modelo; ?>" name="modelo" id="modelo" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion:</label>
      <input type="text" class="form-control" value="<?php echo $productos->Descripcion; ?>"  name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="">
    </div>



    <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad:</label>
      <input type="text" class="form-control" value="<?php echo $productos->Total; ?>"  name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="">
    </div>



    <input name="" id="" class="btn btn-danger" type="submit" value="Guardar Rockola">
    <a href="?controlador=rockola&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>