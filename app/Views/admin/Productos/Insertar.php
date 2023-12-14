<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO PRODUCTO</h4>
                  <p class="card-description">
                    Add product
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Producto') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre Producto</label>
                      <input type="text" class="form-control"   name="nombre_producto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Precio</label>
                      <input type="number" class="form-control"  name="precio">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Stock</label>
                      <input type="number" class="form-control" name="stock" step="1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Descripcion</label>
                      <input type="text" class="form-control"  name="descripcion">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Productos'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>