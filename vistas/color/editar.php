
<div class="card">
    <div class="card-header">
       Editar el HardWare
    </div>
    <div class="card-body">

    <form action="" method="post">

    <input type="hidden" name="ID" value="<?php echo $productos->ID; ?>" >


    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion:</label>
      <input type="text" class="form-control" value="<?php echo $productos->Nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
    </div>


    <input name="" id="" class="btn btn-danger" type="submit" value="Guardar cambios">
    <a href="?controlador=hardware&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>