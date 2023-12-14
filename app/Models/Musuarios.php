<?php

namespace App\Models;

use CodeIgniter\Model;

class Musuarios extends Model
{

  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('usuarios');
      $usuario->insert($datos);
      return $this->db->insertID();
  }
  
  public function obtener_usuario($id){
    return $this->db->table('usuarios')->where('id_usuarios',$id)->get()->getRow(); 
  }
  
  public function actualizar_usuario($data, $id){
    $this->db->table('usuarios')->where('id_usuarios',$id)->update($data);
  } 

// lisatr usaurios crud
public function listar_usuarios(){
    $usuarios = $this->db->query("SELECT * FROM usuarios");
    return $usuarios->getResult();
}

// actualizar usuario crud
public function update_usuario($id,$data){

    $usuario = $this->db->table('usuarios');
    $usuario->set($data);
    $usuario->where('id_usuarios', $id);
    return $usuario->update();

  }

  // eliminar usuario crud
  public function eliminar_usuario($id)
  {
      $usuario = $this->db->table('usuarios');
      $usuario->where('id_usuarios', $id);
      return $usuario->delete();
  }
}