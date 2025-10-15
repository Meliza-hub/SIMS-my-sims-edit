<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;

class InstructorSeeder extends Seeder
{
    public function run(): void
    {
        // Create a User first
        $user = User::create([
            'name'     => 'John Doe',
            'email'    => 'johndoe@example.com',
            'password' => Hash::make('password'),
            'role'     => 'instructor',
        ]);

        // Then create Instructor profile linked to the User
        Instructor::create([
            'user_id'         => $user->id,
            'first_name'      => 'John',
            'last_name'       => 'Doe',
            'employee_number' => 'EMP-1001',
            'department'      => 'Information Technology',
        ]);
    }
}
