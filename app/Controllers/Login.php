<?php

namespace App\Controllers;

use App\Models\Mlogin;

class Login extends BaseController
{

  public function migrate(){
    $migrate = \Config\Services::migrations();
    try{
      $migrate->latest();
      //$migrate->regress(0);
    }
    catch(Throwable $e){
      echo $e;
    }
  }

  public function seeder(){
    $seeder = \Config\Database::seeder();
    $seeder->call('admin');
  }

    public function login(){
        $Usuario = new Mlogin();
     
          $nombre = $this->request->getPost('nombre');
          $apellido= $this->request->getPost('apellido');
          $email = $this->request->getPost('email');
          $password = $this->request->getPost('password');

          $datosUsuario = $Usuario->traer_usuario_email(['email' => $email]);
    
    
          if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])){
            $data = [
                "email" => $datosUsuario[0]['email'],
                "nombre" => $datosUsuario[0]['nombre'],
                "apellido" => $datosUsuario[0]['apellido'],
                "type" => $datosUsuario[0]['type']
            ];
    
            $session = session();
            $session->set($data);
    
            if ($datosUsuario[0]['type'] == 'admin') {
                // Si es un administrador, redirigir a la ruta de administrador
                return redirect()->to(base_url('admin/Home'))->with('mensaje','1');
            } else {
                // Si es un cliente, redirigir a la ruta de cliente
                return redirect()->to(base_url('Principal'))->with('mensaje','1');
            }
        } else {
            return redirect()->to(base_url('Iniciar_Sesion'))->with('mensaje','0');
        }
      }

      // salir regresar al login
      public function salir(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/')); 
    
      } 

      
}
