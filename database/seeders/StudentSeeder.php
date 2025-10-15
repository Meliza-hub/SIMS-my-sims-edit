<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'user_id' => 3, // Jane Student from UserSeeder
                'student_number' => 'STU-2025-0001',
                'first_name'     => 'Jane',
                'last_name'      => 'Student',
                'program_id' => 1, // BSIT from ProgramSeeder
                'year_level' => '1st Year',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
