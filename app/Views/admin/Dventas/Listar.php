<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DETALLE VENTA</h4>
                  
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <a href="<?php echo base_url('admin/Insertar/Dventa'); ?>"class="btn btn-success">NUEVO DETALLE</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID_VENTA 
                          </th>
                          <th>
                            ID PRODUCTO VENTA
                          </th>
                          <th>
                            CANTIDAD
                          </th>
                          <th>
                            SUBTOTAL
                          </th>
                         
                        </tr>
                      </thead>
                      <?php foreach($usuarios as $usuario): ?>
                      <tbody>
                        <tr>
                          <td>
                          <?php echo $usuario->id_venta ?>
                          </td>
                          <td>
                          <?php echo $usuario->id_producto_venta ?>
                          </td>
                          <td>
                          <?php echo $usuario->cantidad ?>
                          </td>
                          <td>
                          <?php echo $usuario->subtotal ?>
                          </td>
                          <td>
                            <a href="<?php echo base_url('admin/eliminar/Dventa/'.$usuario->id_detalle_venta); ?>" 
                                        class="btn btn-primary" 
                                        onclick="return confirmDelete()">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?php echo base_url("admin/editar/Dventa/$usuario->id_detalle_venta");?>" 
                                        class="btn btn-light">
                                        <i class="fas fa-edit"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <script>
    function confirmDelete(){
        if(confirm("¿Seguro que desea eliminar este detalle de la venta")){
            return true;
        }else{
            return false;
        }
    }

    $(document).ready(function() {
        $('#tabla-trabajadoras').DataTable({
            "paging": true,
            "lengthMenu": [10, 25, 50, 75, 100],
            "pageLength": 10
        });

        $('#buscador').on('keyup', function() {
            $('#tabla-trabajadoras').DataTable().search($(this).val()).draw();
        });
    });
    </script>
<?php echo $this->endSection();?>