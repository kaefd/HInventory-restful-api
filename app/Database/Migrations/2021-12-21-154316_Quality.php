<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Quality extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_quality'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code_quality'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'name_quality'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
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

        $this->forge->addKey('id_quality', true);
        $this->forge->createTable('quality');
    }

    public function down()
    {
        $this->forge->dropTable('quality');
    }
}
