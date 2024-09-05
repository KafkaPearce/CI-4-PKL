<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
                'auto_increment' => false,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '75',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['aktif', 'tidak aktif'], ],
        ]);
        $this->forge->addKey('email', true);
        $this->forge->createTable('Akun', true);
    }

    public function down()
    {
        $this->forge->dropTable('Akun', true);
    }
}
