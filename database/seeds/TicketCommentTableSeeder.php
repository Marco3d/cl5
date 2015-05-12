<?php

use TeachMe\Entities\TicketComment;
use Faker\Generator;

class TicketCommentTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new TicketComment();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return ([
            'comment' => $faker->paragraph(),
            'link' => $faker->randomElement(['', '', $faker->url]),
            'user_id' => rand(1, 51),
            'ticket_id' => rand(1, 200),

        ]);
    }

    public function run()
    {
        $this->createMultiple(300);
    }
}
