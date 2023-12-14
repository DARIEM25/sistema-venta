<?php echo $this->extend('admin/Administrador'); ?>
<?php echo $this->section('contenido'); ?>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">NUEVO REGISTRO DE EMPLEADO</h4>
      <p class="card-description">
        Agregar Registro de Empleados
      </p>
      <form class="forms-sample" action="<?= base_url('admin/registrar/Rventa') ?>" method="post">
        <div class="form-group">
          <label for="exampleInputName1">NOMBRE</label>
          <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">APELLIDO</label>
          <input type="text" class="form-control" name="apellido">
        </div>
        <div class="form-group">
          <label for="sexo">Sexo</label>
          <select class="form-control" name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">CORREO</label>
          <input type="email" class="form-control" name="correo">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">TELEFONO </label>
          <input type="number" class="form-control" name="telefono">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">DIRECCION </label>
          <input type="text" class="form-control" name="direccion">
        </div>

        <button type="submit" class="btn btn-primary mr-2">Guardar</button>
        <a href="<?php echo base_url('admin/Rventas'); ?>" class="btn btn-primary">
          Cancelar
        </a>
      </form>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>
