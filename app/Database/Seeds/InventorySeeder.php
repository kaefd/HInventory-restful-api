<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class InventorySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $data = [
            'code'          => '77710',
            'name'          => 'mug',
            'design'        => $faker->colorName(),
            'code_quality'  => 'LOC',
            'weight'        => '670',
            'qty_pcs'       => '36',
            'qty_ctn'       => '100',
            'total_pcs'     => '3600',
            'created_at'    => Time::createFromTimestamp($faker->unixTime()),
            'updated_at'    => Time::now()
        ];


        // Using Query Builder
        $this->db->table('inventory')->insert($data);
    }
}
