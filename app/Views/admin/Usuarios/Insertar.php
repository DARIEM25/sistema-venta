<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO REGISTRO VENTA</h4>
                  <p class="card-description">
                    Agregar Registro de Venta
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Rventa') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">FECHA VENTA</label>
                      <input type="date" class="form-control"   name="fecha_venta">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">ID CLIENTE</label>
                      <input type="text" class="form-control"  name="id_cliente">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">VENTA TOTAL</label>
                      <input type="text" class="form-control"  name="total_venta">
                    </div>
                  
    
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Rventas'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>