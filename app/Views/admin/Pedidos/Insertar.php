<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO PEDIDO/h4>
                  <p class="card-description">
                    Add pedido
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Pedido') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Cantidad</label>
                      <input type="number" class="form-control"   name="cantidad">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Fecha Pedido</label>
                      <input type="date" class="form-control"  name="fecha_pedido">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Estado Pedido</label>
                      <input type="text" class="form-control"  name="estado_pedido">
                    </div>
                    
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