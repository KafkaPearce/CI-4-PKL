<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class DetailAkun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_akun' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 75,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 75,
                'null' => false
            ],
            'no_telp' => [
                'type' => 'CHAR',
                'constraint' => 15,
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'Foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ]
        ]);

        $this->forge->addKey('id_detail_akun', true);
        $this->forge->addForeignKey('email', 'Akun', 'email', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_akun', true);
    }

    public function down()
    {
        $this->forge->dropTable('DetailAkun', true);
    }
}
