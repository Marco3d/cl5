<?php

use TeachMe\Entities\TicketVote;

class TicketVoteTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return ([
                 'user_id' => rand(1, 51),
                 'ticket_id' => rand(1, 200),

             ]);
    }

    public function run()
    {
        $this->createMultiple(400);
    }
}
