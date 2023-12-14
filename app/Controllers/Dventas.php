<?php

namespace App\Controllers;

use App\Models\Mdventa;

class Dventas extends BaseController
{
    public function crear()
{
    // Obtén los datos del formulario
    $datos = [
        'id_venta' => $_POST['id_venta'],
        'id_producto_venta' => $_POST['id_producto_venta'],
        'cantidad' => $_POST['cantidad'],
        'subtotal' => $_POST['subtotal']
    ];
    if ($this->validate('crear_dventa')){
    $usuario = new Mdventa

;
    $usuario->insertar_usuario($datos);
    return $this->Listar();
}else{
    return $this->Listar();
    }
}

      public function Listar(){ //vista lsita de todos los clientes
        $modelo = new Mdventa
    ;
        $data['usuarios'] = $modelo->listar_usuarios(); 
        echo view('admin/Dventas/Listar', $data);
    }
      
    
      public function mostrarFormulario(){//vista formulario insertar
        return view('admin/Dventas/Insertar'); 
      }
    
    public function __construct()
        {
            // Carga el modelo en el constructor
            $this->Modelo = new Mdventa
        ();
        }
    
        // Resto de tus métodos...
    
        public function editar($id)
        {
            $data['usuario'] = $this->Modelo->obtener_usuario($id);
        
            echo view('admin/Dventas/Actualizar', $data);
        }
        
        public function actualizar()
        {
    
            $id = $this->request->getPost('id_detalle_venta');
            $data = [
                'id_venta' => $this->request->getPost('id_venta'),
                'id_producto_venta' => $this->request->getPost('id_producto_venta'),
                'cantidad' => $this->request->getPost('cantidad'),
                'subtotal' => $this->request->getPost('subtotal'),
               
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