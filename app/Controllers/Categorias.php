<?php

namespace App\Controllers;

use App\Models\Mcategorias;

class Categorias extends BaseController
{
    public function crear()
{
    // Obtén los datos del formulario
    
    $datos = [
        'categoria_descripcion' => $_POST['categoria_descripcion']   
    ];
    if ($this->validate('crear_categoria')){
    $usuario = new Mcategorias;
    $usuario->insertar_usuario($datos);
    return $this->Listar();
 }else{
    return $this->Listar();
    }
}

      public function Listar(){ //vista lsita de todos los clientes
        $modelo = new Mcategorias;
        $data['usuarios'] = $modelo->listar_usuarios(); 
        echo view('admin/Categorias/Listar', $data);
    }
      
    
      public function mostrarFormulario(){//vista formulario insertar
        return view('admin/Categorias/Insertar'); 
      }
    
    public function __construct()
        {
            // Carga el modelo en el constructor
            $this->Modelo = new Mcategorias();
        }
    
        
    
        public function editar($id)
        {
            $data['usuario'] = $this->Modelo->obtener_usuario($id);
        
            echo view('admin/Categorias/Actualizar', $data);
        }
        
        public function actualizar()
        {
    
            $id = $this->request->getPost('categoria_id');
            $data = [
                'categoria_descripcion' => $this->request->getPost('categoria_descripcion'),
                
                
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

    
}