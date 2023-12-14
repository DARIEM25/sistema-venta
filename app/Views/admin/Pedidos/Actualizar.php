<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">MODIFICAR PEDIDO/h4>
                  <p class="card-description">
                    edit pedido
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/actualizar/Pedido') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Cantidad</label>
                      <input type="text" class="form-control"   name="cantidad" value="<?php echo $usuario->cantidad ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Fecha Pedido</label>
                      <input type="date" class="form-control"  name="fecha_pedido" value="<?php echo $usuario->fecha_pedido ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Estado Pedido</label>
                      <input type="text" class="form-control"  name="estado_pedido" value="<?php echo $usuario->estado_pedido ?>">
                    </div>
                    
                    <input type="hidden" name="id_pedido" value="<?php echo $usuario->id_pedido ?>">
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Pedidos'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>