<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVA CATEGORIA</h4>
                  <p class="card-description">
                    Add Category
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Categoria') ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Categoria Descripcion</label>
                      <input type="text" class="form-control"   name="categoria_descripcion">
                    </div>
                    

                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Categorias'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>