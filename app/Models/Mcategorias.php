<?php

namespace App\Models;

use CodeIgniter\Model;

class Mcategorias extends Model
{

  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('producto_categoria');
      $usuario->insert($datos);
      return $this->db->insertID();
  }

  public function obtener_usuario($id){
      return $this->db->table('producto_categoria')->where('categoria_id',$id)->get()->getRow(); 
    }
    
    public function actualizar_usuario($data, $id){
      $this->db->table('producto_categoria')->where('categoria_id',$id)->update($data);
    } 

  // lisatr usaurios crud
  public function listar_usuarios(){
      $usuarios = $this->db->query("SELECT * FROM producto_categoria");
      return $usuarios->getResult();
  }

  // actualizar usuario crud
  public function update_usuario($id,$data){

      $usuario = $this->db->table('producto_categoria');
      $usuario->set($data);
      $usuario->where('categoria_id', $id);
      return $usuario->update();

    }

    // eliminar usuario crud
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table('producto_categoria');
        $usuario->where('categoria_id', $id);
        return $usuario->delete();
    }

}