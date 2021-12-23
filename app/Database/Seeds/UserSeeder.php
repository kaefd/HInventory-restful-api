<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {

        $faker = \Faker\Factory::create('id_ID');

        for($i = 0; $i < 3; $i++){

        $data = [
            'username'   => $faker->unique()->userName(),
            'password'   => $faker->unique()->password(),
            'fullname'   => $faker->name(),
            'code_user'  => $faker->unique()->randomNumber(7, true),
            'tlp'        => $faker->phoneNumber(),
            'created_at' => Time::createFromTimestamp($faker->unixTime()),
            'updated_at' => Time::now()
            
        ];

        $this->db->table('user')->insert($data);

        }
    }
}
