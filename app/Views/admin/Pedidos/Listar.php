<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PEDIDOS</h4>
                  
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <a href="<?php echo base_url('admin/Insertar/Pedido'); ?>"class="btn btn-success">NUEVO PEDIDO</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Cantidad 
                          </th>
                          <th>
                            fecha_pedido
                          </th>
                          <th>
                            estado_pedido
                          </th>
                          
                          <th>
                            Acciones
                          </th>
                        </tr>
                      </thead>
                      <?php foreach($usuarios as $usuario): ?>
                      <tbody>
                        <tr>
                          <td>
                          <?php echo $usuario->cantidad ?>
                          </td>
                          <td>
                          <?php echo $usuario->fecha_pedido ?>
                          </td>
                          <td>
                          <?php echo $usuario->	estado_pedido ?>
                          </td>
                          
                          <td>
                            <a href="<?php echo base_url('admin/eliminar/Pedido/'.$usuario->id_pedido); ?>" 
                                        class="btn btn-primary" 
                                        onclick="return confirmDelete()">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?php echo base_url("admin/editar/Pedido/$usuario->id_pedido");?>" 
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
        if(confirm("¿Seguro que desea eliminar este Pedido")){
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