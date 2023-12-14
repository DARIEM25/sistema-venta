<?php

namespace App\Controllers;

use App\Models\Mrventa;

class Rventas extends BaseController
{
    public function crear()
{
    // Obtén los datos del formulario
    $datos = [
        'nombre' => $this->request->getPost('nombre'),
        'apellido' => $this->request->getPost('apellido'),
        'sexo' => $this->request->getPost('sexo'),
        'correo' => $this->request->getPost('correo'),
        'telefono' => $this->request->getPost('telefono'),
        'direccion' => $this->request->getPost('direccion')
    ];
    
    if ($this->validate('crear_rventas')){
    $usuario = new Mrventa

;
    $usuario->insertar_usuario($datos);
    return $this->Listar();
}else{
    return 'error validaion';
    }
}

      public function Listar(){ //vista lsita de todos los clientes
        $modelo = new Mrventa
    
    ;
        $data['usuarios'] = $modelo->listar_usuarios(); 
        echo view('admin/Rventas/Listar', $data);
    }
      
    
      public function mostrarFormulario(){//vista formulario insertar
        
        return view('admin/Rventas/Insertar'); 
      }
    
    public function __construct()
        {
            // Carga el modelo en el constructor
            $this->Modelo = new Mrventa
        
        ();
        }
    
        // Resto de tus métodos...
    
        public function editar($id)
        {
            $data['usuario'] = $this->Modelo->obtener_usuario($id);
        
            echo view('admin/Rventas/Actualizar', $data);
        }
        
        public function actualizar()
        {
    
            $id = $this->request->getPost('id_empleado');
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'sexo' => $this->request->getPost('sexo'),
                'correo' => $this->request->getPost('correo'),
                'telefono' => $this->request->getPost('telefono'),
                'direccion' => $this->request->getPost('direccion')
                
                
               
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