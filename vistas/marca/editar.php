<div class="card">
    <div class="card-header">
       Marcas - Realizar cambios
    </div>
    <div class="card-body">

    <form action="" method="post">

    <input type="hidden" name="ID" value="<?php echo $productos->ID; ?>" >

    <div class="mb-3">
    <div class="mb-3">
    <label for="tipo" class="form-label">Marca para:</label>
    <select name="tipo" id="tipo" >

        <?php
        if( $productos->Tipo == 'R') {
          echo '<option value="R" selected="selected" >Rockola</option>';
          echo '<option value="H">HardWare</option>';
        } else {
          echo '<option value="R"  >Rockola</option>';
          echo '<option value="H" selected="selected">HardWare</option>';
        }
                       
        ?>
    </select>
    

    </div>
  </div>

    <div class="mb-3">
      <label for="marca" class="form-label">Marca:</label>
      <input type="text" class="form-control" value="<?php echo $productos->Marca; ?>" name="marca" id="marca" aria-describedby="helpId" placeholder="">
    </div>


    <input name="" id="" class="btn btn-danger" type="submit" value="Guardar marca">
    <a href="?controlador=marca&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>