<?php

// use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
// use Illuminate\Database\Eloquent\Model;

use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return ([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('12345'),
                ]);
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([

            'name' => 'Marco Perafán',
            'email' => 'marcoperafan@gmail.com',
            'password' => bcrypt('admin'),

            ]);
    }
}
