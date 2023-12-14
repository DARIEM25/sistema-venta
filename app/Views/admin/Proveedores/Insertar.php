<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO PROVEEDOR</h4>
                  <p class="card-description">
                    Agregrar Proveedor
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Proveedor') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre Proveedor</label>
                      <input type="text" class="form-control"   name="nombre_proveedor">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">direccion</label>
                      <input type="text" class="form-control"  name="direccion">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Telefono</label>
                      <input type="number" class="form-control"  name="telefono">
                    </div>
    
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Proveedores'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>