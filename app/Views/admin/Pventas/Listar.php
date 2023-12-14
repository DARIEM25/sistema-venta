<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">PRODUCTO VENTA</h4>
            <a href="<?php echo base_url('admin/Insertar/Pventa'); ?>" class="btn btn-success">NUEVO PRODUCTO VENTA</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                EMPLEADO
                            </th>
                            <th>
                                PRODUCTO
                            </th>
                            <th>
                                FECHA VENTA
                            </th>
                            <th>
                                NOMBRE CLIENTE
                            </th>
                            <th>
                                CANTIDAD
                            </th>
                            <th>
                                PRECIO DE VENTA
                            </th>
                            <th>
                                TOTAL
                            </th>
                            <th class="d-md-block">
                                ACCIONES
                            </th>
                        </tr>
                    </thead>
                    <?php foreach($usuarios as $usuario): ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $usuario->nombre_empleado ?>
                            </td>
                            <td>
                                <?php echo $usuario->nombre_producto ?>
                            </td>
                            <td>
                                <?php echo $usuario->fecha_venta ?>
                            </td>
                            <td>
                                <?php echo $usuario->nombre_cliente ?>
                            </td>
                            <td>
                                <?php echo $usuario->cantidad ?>
                            </td>
                            <td>
                                <?php echo $usuario->precio_venta ?>
                            </td>
                            <td>
                                <?php echo $usuario->total ?>
                            </td>
                            <td class="d-md-block">
                                <a href="<?php echo base_url('admin/eliminar/Pventa/'.$usuario->id_producto_venta); ?>" 
                                    class="btn btn-primary" 
                                    onclick="return confirmDelete()">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </a>
                                <a href="<?php echo base_url("admin/editar/Pventa/$usuario->id_producto_venta");?>" 
                                    class="btn btn-light">
                                    <i class="fas fa-edit"></i> Editar
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
        if(confirm("¿Seguro que desea eliminar este Producto Venta")){
            return true;
        } else {
            return false;
        }
    }
</script>

<?php echo $this->endSection();?>
