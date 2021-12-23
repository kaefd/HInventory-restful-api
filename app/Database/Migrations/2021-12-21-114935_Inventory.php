<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_inventory'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code'               => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
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
            'created_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);

        $this->forge->addKey('id_inventory', true);
        $this->forge->createTable('inventory');
    }

    public function down()
    {
        $this->forge->dropTable('inventory');
    }
}
