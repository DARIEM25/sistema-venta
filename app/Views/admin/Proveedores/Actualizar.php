<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO PROVEEDOR</h4>
                  <p class="card-description">
                    Add proveedor
                  </p>
                  <form class="forms-sample" action="<?= base_url('admin/actualizar/Proveedor') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre Proveedor</label>
                      <input type="text" class="form-control"  required="" name="nombre_proveedor" value="<?php echo $usuario->nombre_proveedor ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Direccion</label>
                      <input type="text" class="form-control" required="" name="direccion" value="<?php echo $usuario->direccion ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Telefono</label>
                      <input type="text" class="form-control" required="" name="telefono" value="<?php echo $usuario->telefono ?>">
                    </div>
                

                    <input type="hidden" name="id_proveedor" value="<?php echo $usuario->id_proveedor ?>">
                    <button type="submit" class="btn btn-primary mr-2">Guardar Modificacion</button>
                    <a href="<?php echo base_url('admin/Proveedores'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>