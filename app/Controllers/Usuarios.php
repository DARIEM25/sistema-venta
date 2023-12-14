<?php

namespace App\Controllers;

use App\Models\Musuarios;

class Usuarios extends BaseController
{
    public function index()
    {
        return view('home/Inicio');
    }

    public function Registrarse()
    {
        return view('home/Registrarse');
    }

    public function Inciar_Sesion()
    {
        return view('home/Iniciar_Sesion');
    }

    public function Principal()
    {
        return view('client/SuperClient');
    }
    public function registro_usuario()
      {
          // Obtén los datos del formulario
          $nombre = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $estado = 1; // Establecer el estado por defecto como 1
          $type = 'cliente'; // Establecer el tipo por defecto como 'cliente'
      
          // Aplicar un hash seguro a la contraseña utilizando password_hash()
          $password_hashed = password_hash($password, PASSWORD_DEFAULT);
      
          // Obtén los datos actualizados
          $datos = [
              'nombre' => $nombre,
              'apellido' => $apellido,
              'email' => $email,
              'password' => $password_hashed, // Guardar la contraseña hasheada
              'estado' => $estado,
              'type' => $type
          ];
      
          $usuario = new Musuarios;
          $usuario->insertar_usuario($datos); 
          return $this->Inciar_Sesion();
      }
}

