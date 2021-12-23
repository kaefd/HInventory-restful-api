<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Delivered extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_deliv'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code_deliv'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'design'             => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'code_quality'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'weight'             => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null'           => true,
            ],
            'qty_pcs'            => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null'           => false,
            ],
            'qty_ctn'            => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null'           => false,
            ],
            'total_pcs'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null'           => false,
            ],
            'code_customer'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => false,
            ],
            'status'       => [
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
            ]
        ]);

        $this->forge->addKey('id_deliv', true);
        $this->forge->createTable('delivered');
    }

    public function down()
    {
        $this->forge->dropTable('delivered');
    }
}
