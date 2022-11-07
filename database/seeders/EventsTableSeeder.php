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
            ['id'=>1, 'patient_information'=>'Event #1', 'start_date'=>'2022-11-05 08:00:00',
                 'end_date'=>'2022-11-05 11:00:00'],
            ['id'=>2, 'patient_information'=>'Event #2', 'start_date'=>'2022-11-06 15:00:00',
                 'end_date'=>'2022-11-06 16:30:00'],
            ['id'=>3, 'patient_information'=>'Event #3', 'start_date'=>'2022-11-04 00:00:00',
                 'end_date'=>'2022-11-20 00:00:00'],
            ['id'=>4, 'patient_information'=>'Event #4', 'start_date'=>'2022-11-01 08:00:00',
                 'end_date'=>'2022-11-01 11:00:00'],
            ['id'=>5, 'patient_information'=>'Event #5', 'start_date'=>'2022-11-20 08:00:00',
                 'end_date'=>'2022-11-20 11:00:00'],
            ['id'=>6, 'patient_information'=>'Event #6', 'start_date'=>'2022-11-25 08:00:00',
                 'end_date'=>'2022-11-25 11:00:00']
        ]);
    }
}
