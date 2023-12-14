<?php

namespace App\Models;

use CodeIgniter\Model;

class Mproductos extends Model
{

  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('producto');
      $usuario->insert($datos);
      return $this->db->insertID();
  }

  public function obtener_usuario($id){
      return $this->db->table('producto')->where('id_producto',$id)->get()->getRow(); 
    }
    
    public function actualizar_usuario($data, $id){
      $this->db->table('producto')->where('id_producto',$id)->update($data);
    } 

  // lisatr usaurios crud
  public function listar_usuarios(){
      $usuarios = $this->db->query("SELECT * FROM producto");
      return $usuarios->getResult();
  }

  // actualizar usuario crud
  public function update_usuario($id,$data){

      $usuario = $this->db->table('producto');
      $usuario->set($data);
      $usuario->where('id_producto', $id);
      return $usuario->update();

    }

    // eliminar usuario crud
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table('producto');
        $usuario->where('id_producto', $id);
        return $usuario->delete();
    }

    public function usuarios_paginacion($num_items = null, $start = null)
    {
        $usuarios = $this->db->table('producto');
        $usuarios->orderBy('id_producto', 'asc');
        if ($num_items >=2 && $start >=0) {
          $usuarios->limit($num_items, $start);
        
      }
        return $usuarios->get()->getResult();}

    public function num_registros_usuarios()
{
    $usuario= $this->db->table('producto');
    return $usuario->countAll();
}
}
      
      

