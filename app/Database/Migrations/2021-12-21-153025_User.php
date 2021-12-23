<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'password'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'fullname'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'code_user'          => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'tlp'                => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
