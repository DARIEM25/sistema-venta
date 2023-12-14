<?php

namespace App\Controllers;

use App\Models\Mpedidos;

class Pedidos extends BaseController
{
    public function crear()
{
    // Obtén los datos del formulario
    $datos = [
        'cantidad' => $_POST['cantidad'],
        'fecha_pedido' => $_POST['fecha_pedido'],
        'estado_pedido' => $_POST['estado_pedido']
        
        
    ];
    if ($this->validate('crear_pedido')){
    $usuario = new Mpedidos;
    $usuario->insertar_usuario($datos);
    return $this->Listar();
}else{
    return $this->Listar();
    }
}

      public function Listar(){ //vista lsita de todos los clientes
        $modelo = new Mpedidos;
        $data['usuarios'] = $modelo->listar_usuarios(); 
        echo view('admin/Pedidos/Listar', $data);
    }
      
    
      public function mostrarFormulario(){//vista formulario insertar
        return view('admin/Pedidos/Insertar'); 
      }
    
    public function __construct()
        {
            // Carga el modelo en el constructor
            $this->Modelo = new Mpedidos();
        }
    
        // Resto de tus métodos...
    
        public function editar($id)
        {
            $data['usuario'] = $this->Modelo->obtener_usuario($id);
        
            echo view('admin/Pedidos/Actualizar', $data);
        }
        
        public function actualizar()
        {
    
            $id = $this->request->getPost('id_pedido');
            $data = [
                'cantidad' => $this->request->getPost('cantidad'),
                'fecha_pedido' => $this->request->getPost('fecha_pedido'),
                'estado_pedido' => $this->request->getPost('estado_pedido'),
                
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