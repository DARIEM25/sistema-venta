<?php

namespace App\Controllers;

use App\Models\Mpventa;
use App\Models\Mrventa;
use App\Models\Mproductos;

class Pventas extends BaseController
{
    public function crear()
    {
        // Obtén los datos del formulario
        $datos = [
            'nombre_empleado' => $this->request->getPost('nombre_empleado'),
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio_venta' => $this->request->getPost('precio_venta')
        ];
    
        // Calcula el total multiplicando cantidad y precio_venta
        $datos['total'] = $datos['cantidad'] * $datos['precio_venta'];
    
        // Inserta en la base de datos utilizando el modelo
        $modelo = new Mpventa();
        $modelo->insertar_usuario($datos);
    
        return $this->Listar();
    }
    

    // Método para validar los datos
    private function validarDatos($datos)
    {
        $validationRules = [
            'nombre_empleado' => 'required',
            'nombre_producto' => 'required',
            'nombre_cliente' => 'required',
            'cantidad' => 'required|numeric',
            'precio_venta' => 'required|numeric',
        ];

        if (!$this->validate($validationRules)) {
            return false;
        }

        return true;
    }

    public function Listar()
    {
        // Vista lista de todos los clientes
        $modelo = new Mpventa();
        $data['usuarios'] = $modelo->listar_usuarios();
        echo view('admin/Pventas/Listar', $data);
    }

    public function mostrarFormulario()
    {
        // Vista formulario insertar
        $empleado= new Mrventa();
        $producto= new Mproductos();
        $emple= $empleado -> listar_usuarios();
        $prod= $producto ->listar_usuarios();
        $dato=[
            'emple'=>$emple,
            'prod'=>$prod,
        ];
        return view('admin/Pventas/Insertar',$dato);
    }

    public function __construct()
    {
        // Carga el modelo en el constructor
        $this->Modelo = new Mpventa();
    }

    public function editar($id)
    {
        $data['usuario'] = $this->Modelo->obtener_usuario($id);
        echo view('admin/Pventas/Actualizar', $data);
    }

    public function actualizar()
    {
        $id = $this->request->getPost('nombre_empleado_venta');
        $data = [
            'nombre_empleado' => $this->request->getPost('nombre_empleado'),
            'nombre_producto' => $this->request->getPost('nombre_producto'),
            'fecha_venta' => $this->request->getPost('fecha_venta'),
            'nombre_cliente' => $this->request->getPost('nombre_cliente'),
            'cantidad' => $this->request->getPost('cantidad'),
            'precio_venta' => $this->request->getPost('precio_venta'),
            'total' => $this->request->getPost('total'),
        ];

        // Validación de datos
        if (!$this->validarDatos($data)) {
            // Manejar el caso en que los datos no sean válidos
            return redirect()->to(base_url("Pventas/editar/$id"))->withInput()->with('errors', $this->validator->getErrors());
        }

        // Utiliza $usuario para llamar a la función actualizar
        $usuario = new Mpventa();
        $usuario->update($id, $data);

        return $this->Listar();
    }

    public function eliminar($id)
    {
        // Llama a la función eliminar_usuario del modelo
        $this->Modelo->eliminar_usuario($id);
        return $this->Listar();
    }
}
