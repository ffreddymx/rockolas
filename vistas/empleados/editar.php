<div class="card">
    <div class="card-header">
        Editar el Usuario
    </div>
    <div class="card-body">

    <form action="" method="post">


    <input type="hidden" name="ID" value="<?php echo $usuario->ID; ?>" ">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" class="form-control" value="<?php echo $usuario->Nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="email" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" value="<?php echo $usuario->Email; ?>" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
    </div>


<div class="mb-3">
  <label for="tipo" class="form-label">Tipo de Usuario</label>
  <select class="form-control" name="tipo" id="tipo">
    <option value="1" >Administrador</option>
    <option value="2">Director</option>
    <option value="3">Profesor</option>
  </select>
</div>


    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text" class="form-control" value="<?php echo $usuario->Direccion; ?>" name="direccion" id="direccion" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="usuario" class="form-label">Usuario:</label>
      <input type="text" class="form-control" value="<?php echo $usuario->Usuario; ?>" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="pass" class="form-label">Password:</label>
      <input type="text" class="form-control" value="<?php echo $usuario->Password; ?>" name="pass" id="pass" aria-describedby="helpId" placeholder="">
    </div>


    <input name="" id="" class="btn btn-danger" type="submit" value="Editar Usuario">
    <a href="?controlador=empleados&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>