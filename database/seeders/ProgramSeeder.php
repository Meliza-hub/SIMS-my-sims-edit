<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('programs')->insert([
            [
                'name' => 'Bachelor of Science in Information Technology',
                'code' => 'BSIT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
