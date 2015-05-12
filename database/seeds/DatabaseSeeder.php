<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('tickets')->truncate();
        DB::table('ticket_votes')->truncate();
        DB::table('ticket_comments')->truncate();
        $this->call('UserTableSeeder');
        $this->call('TicketTableSeeder');
        $this->call('TicketVoteTableSeeder');
        $this->call('TicketCommentTableSeeder');
    }
}
