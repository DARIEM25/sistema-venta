<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO DETALLE VENTA</h4>
                  <p class="card-description">
                    Add product
                  </p>
                  <form class="forms-sample" action="<?= base_url('admin/actualizar/Dventa') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">ID VENTA</label>
                      <input type="text" class="form-control"  required="" name="id_venta" value="<?php echo $usuario->id_venta ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">ID PRODUCTO VENTA</label>
                      <input type="number" class="form-control" required="" name="id_producto_venta" value="<?php echo $usuario->id_producto_venta ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">CANTIDAD</label>
                      <input type="text" class="form-control" required="" name="cantidad" value="<?php echo $usuario->cantidad ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">SUBTOTAL</label>
                      <input type="text" class="form-control" required="" name="subtotal" value="<?php echo $usuario->subtotal?>">
                    </div>

                    <input type="hidden" name="id_detalle_venta" value="<?php echo $usuario->id_detalle_venta ?>">
                    <button type="submit" class="btn btn-primary mr-2">Guardar Modificacion</button>
                    <a href="<?php echo base_url('admin/Dventas'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>