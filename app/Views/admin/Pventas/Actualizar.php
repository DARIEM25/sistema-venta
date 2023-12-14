<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ACTUALIZAR REGISTRO VENTA</h4>
                  <p class="card-description">
                    Actualizar venta
                  </p>
                  <form class="forms-sample" action="<?= base_url('admin/actualizar/Pventa') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre Empleado</label>
                      <input type="number" class="form-control"  required="" name="nombre_empleado" value="<?php echo $usuario->nombre_empleado ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre Producto</label>
                      <input type="text" class="form-control"  required="" name="nombre_producto" value="<?php echo $usuario->nombre_producto ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Nombre Cliente</label>
                      <input type="text" class="form-control" required="" name="nombre_cliente" value="<?php echo $usuario->nombre_cliente ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Cantidad</label>
                      <input type="text" class="form-control" required="" name="cantidad" value="<?php echo $usuario->cantidad ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Precio Venta</label>
                      <input type="number" class="form-control" required="" name="precio_venta" value="<?php echo $usuario->precio_venta ?>">
                    </div>
                    <input type="hidden" name="id_producto_venta" value="<?php echo $usuario->id_producto_venta ?>">
                    <button type="submit" class="btn btn-primary mr-2">Guardar Modificacion</button>
                    <a href="<?php echo base_url('admin/Pventas'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>