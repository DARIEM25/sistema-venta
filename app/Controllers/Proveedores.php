<?php

namespace App\Controllers;

use App\Models\Mprovedores;

class Proveedores extends BaseController
{
    public function crear()
{
    // Obtén los datos del formulario
    $datos = [
        'nombre_proveedor' => $_POST['nombre_proveedor'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono']
    ];
    if ($this->validate('crear_provedor')){
    $usuario = new Mprovedores;
    $usuario->insertar_usuario($datos);
    return $this->Listar();
}else{
    return $this->Listar();
    }

}

      public function Listar(){ //vista lsita de todos los clientes
        $modelo = new Mprovedores;
        $data['usuarios'] = $modelo->listar_usuarios(); 
        echo view('admin/Proveedores/Listar', $data);
    }
      
    
      public function mostrarFormulario(){//vista formulario insertar
        return view('admin/Proveedores/Insertar'); 
      }
    
    public function __construct()
        {
            // Carga el modelo en el constructor
            $this->Modelo = new Mprovedores();
        }
    
        // Resto de tus métodos...
    
        public function editar($id)
        {
            $data['usuario'] = $this->Modelo->obtener_usuario($id);
        
            echo view('admin/Proveedores/Actualizar', $data);
        }
        
        public function actualizar()
        {
    
            $id = $this->request->getPost('id_proveedor');
            $data = [
                'nombre_proveedor' => $this->request->getPost('nombre_proveedor'),
                'direccion' => $this->request->getPost('direccion'),
                'telefono' => $this->request->getPost('telefono'),
               
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