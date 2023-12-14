<?php

namespace App\Models;

use CodeIgniter\Model;

class Mrventa extends Model
{

  public function insertar_usuario($datos)
  {
      $usuario = $this->db->table('empleados');
      $usuario->insert($datos);
      return $this->db->insertID();
  }

  public function obtener_usuario($id){
      return $this->db->table('empleados')->where('id_empleado',$id)->get()->getRow(); 
    }
    
    public function actualizar_usuario($data, $id){
      $this->db->table('empleados')->where('id_empleado',$id)->update($data);
    } 

  // lisatr usaurios crud
  public function listar_usuarios(){
      $usuarios = $this->db->query("SELECT * FROM empleados");
      return $usuarios->getResult();
  }

  // actualizar usuario crud
  public function update_usuario($id,$data){

      $usuario = $this->db->table('empleados');
      $usuario->set($data);
      $usuario->where('id_empleado', $id);
      return $usuario->update();

    }

    // eliminar usuario crud
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table('empleados');
        $usuario->where('id_empleado', $id);
        return $usuario->delete();
    }

}