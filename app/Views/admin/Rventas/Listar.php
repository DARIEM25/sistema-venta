<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>



<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">REGISTRO DE  EMPLEADOS</h4>
                  
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <a href="<?php echo base_url('admin/Insertar/Rventa'); ?>"class="btn btn-success"> REGISTRAR EMPLEADO</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>
                            NOMBRE
                          </th>
                          <th>
                            APELLIDO
                          </th>
                          <th>
                            SEXO 
                          </th>
                          <th>
                            CORREO 
                          </th>
                          <th>
                            TELEFONO 
                          </th>
                          <th>
                            DIRECCION 
                          </th>
                          <th>
                            ACCIONES 
                          </th>
                        
                        </tr>
                      </thead>
                      <?php foreach($usuarios as $usuario): ?>
                      <tbody>
                        <tr>
                          <td>
                          <?php echo $usuario->nombre ?>
                          </td>
                          <td>
                          <?php echo $usuario->apellido ?>
                          </td>
                          <td>
                          <?php echo $usuario->sexo ?>
                          </td>
                          <td>
                          <?php echo $usuario->correo ?>
                          </td>
                          <td>
                          <?php echo $usuario->telefono ?>
                          </td>
                          <td>
                          <?php echo $usuario->direccion ?>
                          </td>
              
                          <td>
                            <a href="<?php echo base_url('admin/eliminar/Rventa/'.$usuario->id_empleado); ?>" 
                                        class="btn btn-primary" 
                                        onclick="return confirmDelete()">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?php echo base_url("admin/editar/Rventa/$usuario->id_empleado");?>" 
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
        if(confirm("¿Seguro que desea eliminar a este empleado?")){
            return true;
        }else{
            return false;
        }
    }

    $(document).ready(function() {
        $('#tabla-empleados').DataTable({
            "paging": true,
            "lengthMenu": [10, 25, 50, 75, 100],
            "pageLength": 10
        });

        $('#buscador').on('keyup', function() {
            $('#tabla-empleados').DataTable().search($(this).val()).draw();
        });
    });
    </script>
<?php echo $this->endSection();?>