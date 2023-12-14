<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
	public function run()
	{
		$usuario = "Dariem Javier";
		$apellido = "Mendoza Batallanos";
		$email= 'dariem@gmail.com';
		$password = password_hash('123456', PASSWORD_DEFAULT);
		$estado = 1; 
		$type = "admin";

		$data = [
                        'nombre' => $usuario,
						'apellido' => $apellido,
						'email' => $email,
                        'password' => $password,
						'estado' => $estado,
                        'type' => $type
                ];

                // Using Query Builder
        $this->db->table('usuarios')->insert($data);
	}
}
