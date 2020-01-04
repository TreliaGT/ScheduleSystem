<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => Str::random(10)
        ]);
        DB::table('employees')->insert([
            'name' => Str::random(10)
        ]);

        DB::table('types_appointments')->insert([
            'name' => 'standard',
            'duration' => 50,
            'price' => 15.20
        ]);

        DB::table('types_appointments')->insert([
            'name' => 'Special',
            'duration' => 60,
            'price' => 30.99
        ]);

        DB::table('types_workers')->insert([
            'employee_id' => 1,
            'types_appointment_id' => 1
        ]);

        DB::table('types_workers')->insert([
            'employee_id' => 1,
            'types_appointment_id' => 2
        ]);

        DB::table('types_workers')->insert([
            'employee_id' => 2,
            'types_appointment_id' => 1
        ]);

        DB::table('schedules')->insert([
            'employee_id' => 1,
            'start' => '2019-12-30 14:00:00',
            'end' => '2019-12-30 15:00:00'
        ]);

        DB::table('schedules')->insert([
            'employee_id' => 2,
            'start' => '2019-12-30 14:00:00',
            'end' => '2019-12-30 15:00:00'
        ]);
    }
}
