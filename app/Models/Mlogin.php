<?php

namespace App\Models;

use CodeIgniter\Model;

class Mlogin extends Model
{

    public function traer_usuario_email($data)
    {
        $Usuario = $this->db->table('usuarios');
        $Usuario->where($data);
        // Imprimir la consulta SQL para depuración
        echo $this->db->getLastQuery();
        return $Usuario->get()->getResultArray();
    }
    


}