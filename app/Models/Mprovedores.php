<?php

namespace App\Models;

use CodeIgniter\Model;

class Mprovedores extends Model
{

  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('proveedores');
      $usuario->insert($datos);
      return $this->db->insertID();
  }

  public function obtener_usuario($id){
      return $this->db->table('proveedores')->where('id_proveedor',$id)->get()->getRow(); 
    }
    
    public function actualizar_usuario($data, $id){
      $this->db->table('proveedores')->where('id_proveedor',$id)->update($data);
    } 

  // lisatr usaurios crud
  public function listar_usuarios(){
      $usuarios = $this->db->query("SELECT * FROM proveedores");
      return $usuarios->getResult();
  }

  // actualizar usuario crud
  public function update_usuario($id,$data){

      $usuario = $this->db->table('proveedores');
      $usuario->set($data);
      $usuario->where('id_proveedor', $id);
      return $usuario->update();

    }

    // eliminar usuario crud
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table('proveedores');
        $usuario->where('id_proveedor', $id);
        return $usuario->delete();
    }

}