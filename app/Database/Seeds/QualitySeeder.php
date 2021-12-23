<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class QualitySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $data = [
            [
                'code_quality' => 'LOCA',
                'name_quality' => 'best local',
                'created_at'   => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'   => Time::now(),
            ],
            [
                'code_quality' => 'LOCB',
                'name_quality' => 'local',
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ],
            [
                'code_quality' => 'EXPA',
                'name_quality' => 'best export',
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ],
            [
                'code_quality' => 'EXPB',
                'name_quality' => 'export',
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ],
        ];

        $this->db->table('quality')->insertBatch($data);
    }
}
