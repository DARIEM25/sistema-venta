<?php echo $this->extend('admin/Administrador');?>
<?php echo $this->section('contenido');?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">PRODUCTOS</h4>
            <a href="<?php echo base_url('admin/Insertar/Producto'); ?>" class="btn btn-success">NUEVO PRODUCTO</a>
            
            <div class="table-responsive" id="tabla-completa">
                <table class="table table-bordered">
                    <div class="contenido">
                    <thead>
                        <tr>
                            <th>Nombre Producto</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Descripcion</th>
                            <th class="d-md-block">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="contenido">
                        <?php foreach($usuarios as $usuario): ?>
                            <tr>
                                <td><?php echo $usuario->nombre_producto ?></td>
                                <td><?php echo $usuario->precio ?></td>
                                <td><?php echo $usuario->stock ?></td>
                                <td><?php echo $usuario->descripcion ?></td>
                                <td class="d-md-block">
                                    <a href="<?php echo base_url('admin/eliminar/Producto/'.$usuario->id_producto); ?>" 
                                       class="btn btn-primary" 
                                       onclick="return confirmDelete()">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </a>
                                    <a href="<?php echo base_url("admin/editar/Producto/$usuario->id_producto");?>" 
                                       class="btn btn-light">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </div>
                </table>              
            </div>
            <nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
                    <?php
                    $paginas = $num_productos / 5;
                    if (fmod($num_productos, 5) > 0) {
                        $paginas++;
                    }
                    for ($i = 1; $i <= $paginas; $i++) {
                    ?>
                        <li class="page-item">
                            <a class="page-link" onclick="javascript:paginacion(<?=$i?>)"
                            href="#"><?=$i?></a>
                        </li>
                    <?php
                    }
                    ?>
					</ul>
				</nav>
        </div>
       
    </div>
</div>
<script>
      function confirmDelete(){
        if(confirm("¿Seguro que desea eliminar este Producto")){
            return true;
        } else {
            return false;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
        const url_base='<?=base_url();?>';
		function paginacion(pagina) {
				$.ajax({
					url: url_base+"/admin/ajax/"+pagina,
					cache: false,
					dataType: "json",
					success: function(data) {
                        $('.contenido').empty();
						// Agregar los nuevos datos
						$.each(data, function(index, usuario) {
							$('table').append(
                                '<tr>'+
                                '<td>'+usuario.nombre_producto+'</td>'+
                                '<td>'+usuario.precio+'</td>'+
                                '<td>'+usuario.stock+'</td>'+
                                '<td>'+usuario.descripcion+'</td>'+
                                '<td class="d-md-block">'+
                                    '<a href="'+url_base+'admin/eliminar/Producto/'+usuario.id_producto+'"'+ 
                                       'class="btn btn-primary"'+
                                       'onclick="return confirmDelete()">'+
                                        '<i class="fas fa-trash-alt"></i> Eliminar'+
                                    '</a>'+
                                    '<a href="'+url_base+'admin/editar/Producto/'+usuario.id_producto+'"'+
                                       'class="btn btn-light">'+
                                        '<i class="fas fa-edit"></i> Editar'+
                                    '</a>'+
                                '</td>'+
                            '</tr>'  
                        );
						});
					}
				});
			}
</script>

<?php echo $this->endSection();?>
