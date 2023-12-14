<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO DETALLE VENTA</h4>
                  <p class="card-description">
                    Add product
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Dventa') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">ID Venta</label>
                      <input type="text" class="form-control"   name="id_venta">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">ID Producto Venta</label>
                      <input type="number" class="form-control"  name="id_producto_venta">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Cantidad</label>
                      <input type="number" class="form-control"  name="cantidad">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Subtotal</label>
                      <input type="number" class="form-control"  name="subtotal">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Dventas'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>