<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PROVEEDORES</h4>
                  
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <a href="<?php echo base_url('admin/Insertar/Proveedor'); ?>"class="btn btn-success">NUEVO PROVEEDOR</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Nombre Proveedor
                          </th>
                          <th>
                            Direcion
                          </th>
                          <th>
                            Telefono
                          </th>
                        
                        </tr>
                      </thead>
                      <?php foreach($usuarios as $usuario): ?>
                      <tbody>
                        <tr>
                          <td>
                          <?php echo $usuario->nombre_proveedor ?>
                          </td>
                          <td>
                          <?php echo $usuario->direccion ?>
                          </td>
                          <td>
                          <?php echo $usuario->telefono ?>
                          </td>
              
                          <td>
                            <a href="<?php echo base_url('admin/eliminar/Proveedor/'.$usuario->id_proveedor); ?>" 
                                        class="btn btn-primary" 
                                        onclick="return confirmDelete()">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?php echo base_url("admin/editar/Proveedor/$usuario->id_proveedor");?>" 
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
        if(confirm("¿Seguro que desea eliminar este Proveedor")){
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