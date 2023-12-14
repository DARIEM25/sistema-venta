<?php

namespace App\Controllers;

use App\Models\Mlistas;

class Trajes extends BaseController
{
    public function Listar_Trajes(){ //vista lsita de todos los clientes
        $modelo = new Mlistas;
        $data['usuarios'] = $modelo->listar_Trajes(); 
        echo view('client/Productos/productos', $data);
    }

    public function Listar_Compras(){ //vista lsita de todos los clientes
        $modelo = new Mlistas;
        $data['usuarios'] = $modelo->listar_Trajes(); 
        echo view('client/Comprar/comprar', $data);
    }

    //-------------------------------------------------------------------------------
    public function crear()
    {
        // Obtén los datos del formulario
        $datos = [
            'fecha' => $_POST['fecha'],
            'hora' => $_POST['lugar'],
            'lugar' => $_POST['lugar'],
            'descripcion' => $_POST['descripcion'],
            'trabajadora' => $_POST['trabajadora']
            
        ];
    
        $usuario = new Mlistas;
        $usuario->insertar_Citas($datos);
        return $this-> Cita_Registrada();
    }

    public function Cita_Registrada(){ //vista lsita de todos los clientes
        ; 
        echo view('client/recervas/Succesfull');
    }

    public function mostrarFormulario(){//vista formulario insertar
        return view('client/recervas/RecervarCitas'); 
    }

    //--------------------------------------------------------------------------------
    public function crear_servicio()
    {
        $datos = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio']
        ];
        $usuario = new Mlistas;
        $usuario->insertar_servicio($datos);
        return $this->Servicio_Registrado();
    }

    public function Servicio_Registrado(){ //vista lsita de todos los clientes
        
        echo view('client/servicios/Succesfull');
    }

    public function Formulario_Servicios(){//vista formulario insertar
        return view('client/servicios/RecervarServicios'); 
    } 

    // ----------------------------------------------------------------------------------
    public function crear_evento()
    {
        // Obtén los datos del formulario
        $datos = [
            'nombre_evento' => $_POST['nombre_evento'],
            'tipo_evento' => $_POST['tipo_evento'],
            'fecha' => $_POST['fecha'],
            'hora_inicio' => $_POST['hora_inicio'],
            'descripcion' => $_POST['descripcion'],
            'precio_entrada' => $_POST['precio_entrada'],
            'edad_minima' => $_POST['edad_minima'],
            'lugar' => $_POST['lugar']
            
        ];
    
        $usuario = new Mlistas;
        $usuario->insertar_evento($datos);
        return $this->Evento_Registrado();
    }

    public function Evento_Registrado(){ //vista lsita de todos los clientes
        
        echo view('client/eventos/Succesfull');
    }

    public function Formulario_Eventos(){//vista formulario insertar
        return view('client/eventos/RecervarEventos'); 
    } 

    //-----------------------------------------------------------------------------------
    public function Soporte(){//vista formulario insertar
        return view('client/soporte/Soportes'); 
    }

}