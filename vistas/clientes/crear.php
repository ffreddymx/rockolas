<div class="card">
    <div class="card-header">
        Agregar Nuevo Cliente
    </div>
    <div class="card-body">

    <form action="" method="post">

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellidos:</label>
      <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
    <label for="sexo" class="form-label">Sexo</label>
    <select class="form-control" name="sexo" id="sexo">
        <option value="Hombre" >Hombre</option>
        <option value="Mujer">Mujer</option>
        <option value="Empresa">Empresa</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="">
    </div>


    <div class="mb-3">
      <label for="email" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Nombre del Bar</label>
      <input type="text" class="form-control" name="bar" id="bar" aria-describedby="emailHelpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="">
    </div>



    <input name="" id="" class="btn btn-danger" type="submit" value="Guardar Cliente">
    <a href="?controlador=clientes&accion=inicio" class="btn btn-info" >Cancelar </a>

    </form>
    </div>
</div>