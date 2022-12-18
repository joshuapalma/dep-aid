<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            ['id'=>1, 'text'=>'Event #1', 'start_date'=>'2022-11-05 08:00:00',
                 'end_date'=>'2022-11-05 11:00:00'],
            ['id'=>2, 'text'=>'Event #2', 'start_date'=>'2022-11-06 15:00:00',
                 'end_date'=>'2022-11-06 16:30:00'],
            ['id'=>3, 'text'=>'Event #3', 'start_date'=>'2022-11-04 00:00:00',
                 'end_date'=>'2022-11-20 00:00:00'],
            ['id'=>4, 'text'=>'Event #4', 'start_date'=>'2022-11-01 08:00:00',
                 'end_date'=>'2022-11-01 11:00:00'],
            ['id'=>5, 'text'=>'Event #5', 'start_date'=>'2022-11-20 08:00:00',
                 'end_date'=>'2022-11-20 11:00:00'],
            ['id'=>6, 'text'=>'Event #6', 'start_date'=>'2022-12-25 08:00:00',
                 'end_date'=>'2022-12-25 11:00:00'],
            ['id'=>7, 'text'=>'Event #7', 'start_date'=>'2022-12-05 08:00:00',
                 'end_date'=>'2022-12-05 11:00:00'],
            ['id'=>8, 'text'=>'Event #8', 'start_date'=>'2022-12-06 15:00:00',
                 'end_date'=>'2022-12-06 16:30:00'],
            ['id'=>9, 'text'=>'Event #9', 'start_date'=>'2022-12-04 00:00:00',
                 'end_date'=>'2022-12-20 00:00:00'],
            ['id'=>10, 'text'=>'Event #10', 'start_date'=>'2022-12-01 08:00:00',
                 'end_date'=>'2022-12-01 12:00:00'],
            ['id'=>12, 'text'=>'Event #12', 'start_date'=>'2022-12-20 08:00:00',
                 'end_date'=>'2022-12-20 12:00:00'],
            ['id'=>12, 'text'=>'Event #12', 'start_date'=>'2022-12-25 08:00:00',
                 'end_date'=>'2022-12-25 12:00:00']
        ]);
    }
}
