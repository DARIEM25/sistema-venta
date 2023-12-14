<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlistas extends Model
{

    public function listar_Trajes(){
        $usuarios = $this->db->query("SELECT * FROM producto"); 
        return $usuarios->getResult();
    }

    public function listar_Servicios(){
        $usuarios = $this->db->query("SELECT * FROM servicios");
        return $usuarios->getResult();
    }

    public function listar_Eventos(){
        $usuarios = $this->db->query("SELECT * FROM eventos");
        return $usuarios->getResult();
    }

    public function listar_Clientes(){
        $usuarios = $this->db->query("SELECT * FROM clientes");
        return $usuarios->getResult();
    }

    public function listar_Citas(){
        $usuarios = $this->db->query("SELECT * FROM citas_nocturnas");
        return $usuarios->getResult();
    }

    public function insertar_Citas($datos)
    {
        $usuario = $this->db->table('citas_nocturnas'); 
        $usuario->insert($datos);
        return $this->db->insertID();
    }

    public function insertar_evento($datos)
    {
        $usuario = $this->db->table('eventos'); 
        $usuario->insert($datos);
        return $this->db->insertID();
    }

    public function insertar_servicio($datos)
    {
        $usuario = $this->db->table('servicios'); 
        $usuario->insert($datos);
        return $this->db->insertID();
    }
}