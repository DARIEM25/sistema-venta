<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TAadmins extends Migration
{
	public function up()
        {
                $this->forge->addField([
                                   'id_usuario'          => [
                                'type'           => 'INT',
                                'constraint'     => 5, 
                                'unsigned'       => true,
                                'auto_increment' => true, 
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'apellido'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        
                        'password'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'estado'       => [
                                'type'           => 'INT',
                                'constraint'     => '2',
                        ],
                        'type'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                ]);
                $this->forge->addKey('id_usuario', true);
                $this->forge->createTable('usuarios');
        }

        public function down()
        {
                $this->forge->dropTable('usuarios');
        }
}
