<?php

namespace App\Models;

use CodeIgniter\Model;

class Mdventa extends Model
{

  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('detalle_venta');
      $usuario->insert($datos);
      return $this->db->insertID();
  }

  public function obtener_usuario($id){
      return $this->db->table('detalle_venta')->where('id_detalle_venta',$id)->get()->getRow(); 
    }
    
    public function actualizar_usuario($data, $id){
      $this->db->table('detalle_venta')->where('id_detalle_venta',$id)->update($data);
    } 

  // lisatr usaurios crud
  public function listar_usuarios(){
      $usuarios = $this->db->query("SELECT * FROM detalle_venta");
      return $usuarios->getResult();
  }

  // actualizar usuario crud
  public function update_usuario($id,$data){

      $usuario = $this->db->table('detalle_venta');
      $usuario->set($data);
      $usuario->where('id_detalle_venta', $id);
      return $usuario->update();

    }

    // eliminar usuario crud
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table('detalle_venta');
        $usuario->where('id_detalle_venta', $id);
        return $usuario->delete();
    }

}