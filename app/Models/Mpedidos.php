<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpedidos extends Model
{


  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('pedidos');
      $usuario->insert($datos);
      return $this->db->insertID();
  }

 
  public function obtener_usuario($id){
      return $this->db->table('pedidos')->where('id_pedido',$id)->get()->getRow(); 
    }
    
    public function actualizar_usuario($data, $id){
      $this->db->table('pedidos')->where('id_pedido',$id)->update($data);
    } 

  // lisatr usaurios crud
  public function listar_usuarios(){
      $usuarios = $this->db->query("SELECT * FROM pedidos");
      return $usuarios->getResult();
  }

  // actualizar usuario crud
  public function update_usuario($id,$data){

      $usuario = $this->db->table('pedidos');
      $usuario->set($data);
      $usuario->where('id_pedido', $id);
      return $usuario->update();

    }

    // eliminar usuario crud
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table('pedidos');
        $usuario->where('id_pedido', $id);
        return $usuario->delete();
    }

}