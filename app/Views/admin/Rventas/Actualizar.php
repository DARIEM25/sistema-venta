<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> REGISTRAR EMPLEADO</h4>
                  <p class="card-description">
                    Add Registro Empleados
                  </p>
                  <form class="forms-sample" action="<?= base_url('admin/actualizar/Rventa') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre</label>
                      <input type="text" class="form-control"  required="" name="nombre" value="<?php echo $usuario->nombre ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Apellido</label>
                      <input type="text" class="form-control" required="" name="apellido" value="<?php echo $usuario->apellido ?>">
                    <div class="form-group">
                      <label for="sexo">Sexo</label>
                      <select class="form-control" name="sexo">
                          <option value="M">Masculino</option>
                          <option value="F">Femenino</option>
                      </select>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">correo</label>
                      <input type="email" class="form-control" required="" name="correo" value="<?php echo $usuario->correo ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">telefono</label>
                      <input type="number" class="form-control" required="" name="telefono" value="<?php echo $usuario->telefono ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">direccion</label>
                      <input type="text" class="form-control" required="" name="direccion" value="<?php echo $usuario->direccion ?>">
                    </div>
                    <input type="hidden" name="id_empleado" value="<?php echo $usuario->id_empleado ?>">
                    <button type="submit" class="btn btn-primary mr-2">Guardar Modificacion</button>
                    <a href="<?php echo base_url('admin/Rventas'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>