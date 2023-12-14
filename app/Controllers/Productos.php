<?php

namespace App\Controllers;

use App\Models\Mproductos;

class Productos extends BaseController
{
    public function crear()
{
    // Obténe los datos del formulario
    if ($this->validate('crear_producto')){
    $datos = [
        'nombre_producto' => $_POST['nombre_producto'],
        'precio' => $_POST['precio'],
        'stock' => $_POST['stock'],
        'descripcion' => $_POST['descripcion']   
    ];

    $usuario = new Mproductos;
    $usuario->insertar_usuario($datos);
    return $this->Listar();
}else{

    return $this->Listar();
}

}

      public function Listar(){ //vista lsita de todos los clientes
        
        $modelo = new Mproductos;
        $data['usuarios'] = $modelo->listar_usuarios(); 
        $num=$modelo->num_registros_usuarios();
        $data['num_productos'] = $num;

        echo view('admin/Productos/Listar', $data);
    }
      
   
    
      public function mostrarFormulario(){//vista formulario insertar
        return view('admin/Productos/Insertar'); 
      }
    
    public function __construct()
        {
            // Carga el modelo en el constructor
            $this->Modelo = new Mproductos();
        }
    
        // Resto de tus métodos...
    
        public function editar($id)
        {
            $data['usuario'] = $this->Modelo->obtener_usuario($id);
        
            echo view('admin/Productos/Actualizar', $data);
        }
        
        public function actualizar()
        {
    
            $id = $this->request->getPost('id_producto');
            $data = [
                'nombre_producto' => $this->request->getPost('nombre_producto'),
                'precio' => $this->request->getPost('precio'),
                'stock' => $this->request->getPost('stock'),
                'descripcion' => $this->request->getPost('descripcion'),
                
            ];
    
            // Utiliza $this->Modelo para llamar a la función actualizar_usuario
            $this->Modelo->actualizar_usuario($data, $id);
    
            return $this->Listar();
    
        }
    
        public function eliminar($id)
    {
        // Llama a la función eliminar_usuario del modelo
        $this->Modelo->eliminar_usuario($id);
    
        return $this->Listar();
    }

    public function ajax($pagina)
{
    $usuarios = new Mproductos();
    $data = $usuarios->usuarios_paginacion(4, (($pagina - 1) * 4));
    echo json_encode($data);
}

   
   
}
