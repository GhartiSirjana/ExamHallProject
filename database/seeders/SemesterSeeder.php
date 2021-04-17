<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            ['semester' => '1st Semester'],
            ['semester' => '2nd Semester'],
            ['semester' => '3rd Semester'],
            ['semester' => '4th Semester'],
            ['semester' => '5th Semester'],
            ['semester' => '6th Semester'],
            ['semester' => '7th Semester'],
            ['semester' => '8th Semester']
        ]);
    }
}
