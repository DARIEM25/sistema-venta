<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>


            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">NUEVO REGISTRO DE VENTA</h4>
                  <p class="card-description">
                    Registrar Venta
                  </p>
                  <form class="forms-sample"  action="<?= base_url('admin/registrar/Pventa') ?>" method="post">
                    <div class="form-group">
                    <label for="item_detalle" class="bmd-label-floating">Nombre Empleado</label>
                    <select class="form-control" name="nombre_empleado" nombre="nombre_empleado">
                        <option value="" selected disabled>Seleccione Empleado</option>
                        <?php foreach ($emple as $nomemple): ?>
                            <option value="<?= $nomemple->nombre ?>"><?= $nomemple->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                   </div>
                   <div class="form-group">
                    <label for="item_detalle" class="bmd-label-floating">Producto</label>
                    <select class="form-control" name="nombre_producto" nombre="nombre_producto">
                        <option value="" selected disabled>Seleccione Producto</option>
                        <?php foreach ($prod as $nomprod): ?>
                            <option value="<?= $nomprod->nombre_producto ?>"><?= $nomprod->nombre_producto ?></option>
                        <?php endforeach; ?>
                    </select>
                   </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Nombre Cliente</label>
                      <input type="text" class="form-control"  name="nombre_cliente">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Cantidad</label>
                      <input type="number" class="form-control"  name="cantidad">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Precio Venta</label>
                      <input type="number" class="form-control"  name="precio_venta">
                    </div>
    
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <a href="<?php echo base_url('admin/Pventas'); ?>" 
                                            class="btn btn-primary">
                                            Cancelar
                                </a>
                  </form>
                </div>
              </div>
            </div>
<?php echo $this->endSection();?>