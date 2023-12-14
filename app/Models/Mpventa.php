<?php

namespace App\Models;

use CodeIgniter\Model;

class Mpventa extends Model
{
    protected $table = 'producto_venta';
    protected $primaryKey = 'id_producto_venta';

    protected $allowedFields = [
        'nombre_empleado',
        'nombre_producto',
        'nombre_cliente',
        'cantidad',
        'precio_venta',
        'total',
        // Agrega aquí los demás campos que puedan ser asignados masivamente
    ];

    public function insertar_usuario($datos)
    {
        $usuario = $this->db->table($this->table);
        $usuario->insert($datos);
        return $this->db->insertID();
    }

    public function obtener_usuario($id)
    {
        return $this->db->table($this->table)->where($this->primaryKey, $id)->get()->getRow();
    }

    public function actualizar_usuario($data, $id)
    {
        $this->db->table($this->table)->where($this->primaryKey, $id)->update($data);
    }

    // Listar usuarios CRUD
    public function listar_usuarios()
    {
        return $this->db->table($this->table)->get()->getResult();
    }

    // Actualizar usuario CRUD
    public function update_usuario($id, $data)
    {
        $usuario = $this->db->table($this->table);
        $usuario->set($data);
        $usuario->where($this->primaryKey, $id);
        return $usuario->update();
    }

    // Eliminar usuario CRUD
    public function eliminar_usuario($id)
    {
        $usuario = $this->db->table($this->table);
        $usuario->where($this->primaryKey, $id);
        return $usuario->delete();
    }
}
