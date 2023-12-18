<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => '1',
            'email' => '1@gmail.com',
            'admin' => 'yes',
            'password' => Hash::make('1'),
        ]);
        DB::table('users')->insert([
            'name' => '2',
            'email' => '2@gmail.com',
            'admin' => 'no',
            'password' => Hash::make('2'),
        ]);

        DB::table('projects')->insert([
            'project_name' => 'Sample Project',
            'package_id' => 1,
            'progress_percentage' => 50,
            'status' => 'In Progress',
            'user_id' => 1,
            'project_start' => now(),
            'project_end' => now()->addDays(30)
        ]);
        DB::table('requirements')->insert([
            'requirement_name'        => 'Sample Requirement 1',
            'requirement_description' => 'Description for Requirement 1.',
            'status'                  => 'Active',
        ]);
        DB::table('requirements')->insert([
            'requirement_name'        => 'Sample Requirement 2',
            'requirement_description' => 'Description for Requirement 2.',
            'status'                  => 'Done',
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 1, 
            'user_id' => 2,       
            'feedback' => 'Sample feedback 2.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 1,
            'user_id' => 1,
            'feedback' => 'Sample feedback 1.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
