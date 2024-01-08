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
        DB::table('pricings')->insert([
            'pages' => '1 Long Page',
            'assets' => 'Pre-made Assets',
            'maintenance' => 'No Maintenance',
            'add_ons' => 'No Premium Add-ons',
            'hosting' => 'No Hosting Availabe',
            'price' => 'Rp 1,000,000',
        ]);
        DB::table('pricings')->insert([
            'pages' => 'Up to 10 Pages',
            'assets' => 'Pre-made Assets',
            'maintenance' => 'Maintenance per 3 months',
            'add_ons' => 'Limited Premium Add-ons',
            'hosting' => 'No Hosting Availabe',
            'price' => 'Rp 5,000,000',
        ]);
        DB::table('pricings')->insert([
            'pages' => 'Unlimited Pages',
            'assets' => 'Hand-made Assets',
            'maintenance' => 'Maintenance per month',
            'add_ons' => 'Premium Add-ons',
            'hosting' => 'Hosting Availabe',
            'price' => 'Rp 10,000,000',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'admin' => 'yes',
            'password' => Hash::make('admin'),
        ]);
        DB::table('users')->insert([
            'name' => '2',
            'email' => '2@gmail.com',
            'admin' => 'no',
            'password' => Hash::make('2'),
        ]);
        DB::table('users')->insert([
            'name' => '3',
            'email' => '3@gmail.com',
            'admin' => 'no',
            'password' => Hash::make('3'),
        ]);

        DB::table('projects')->insert([
            'project_name' => 'Sample Project 1',
            'pricing_id' => 1,
            'progress_percentage' => 50,
            'status' => 'In Progress',
            'user_id' => 2,
            'payment_status' =>'Waiting Payment',
            'payment_picture' =>'payment_image_1703344729.png',
            'project_start' => now(),
            'project_end' => now()->addDays(30)
        ]);
        DB::table('projects')->insert([
            'project_name' => 'Sample Project 2',
            'pricing_id' => 2,
            'progress_percentage' => 0,
            'status' => 'In Progress',
            'payment_status' =>'Payment Done',
            'user_id' => 3,
            'project_start' => now(),
            'project_end' => now()->addDays(30)
        ]);
        DB::table('requirements')->insert([
            'requirement_name'        => 'Sample Requirement 1',
            'requirement_description' => 'Description for Requirement 1.',
            'status'                  => 'Active',
            'project_id' => 1
        ]);
        DB::table('requirements')->insert([
            'requirement_name'        => 'Sample Requirement 2',
            'requirement_description' => 'Description for Requirement 2.',
            'status'                  => 'Done',
            'project_id' => 1
        ]);
        DB::table('requirements')->insert([
            'requirement_name'        => 'Sample Requirement 1',
            'requirement_description' => 'Description for Requirement 1.',
            'status'                  => 'Done',
            'project_id' => 2
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 1,
            'project_id' => 1,
            'user_id' => 2,
            'feedback' => 'This needs improvement.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 1,
            'project_id' => 1,
            'user_id' => 1,
            'feedback' => 'on what way?.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 1,
            'project_id' => 1,
            'user_id' => 1,
            'feedback' => 'is it cause of the current ui?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 1,
            'project_id' => 1,
            'user_id' => 2,
            'feedback' => 'YES! you know what im talking about.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 2,
            'project_id' => 1,
            'user_id' => 1,
            'feedback' => 'Is this feature really necessary? just a second though.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('feedbacks')->insert([
            'requirement_id' => 3,
            'project_id' => 2,
            'user_id' => 1,
            'feedback' => 'Sample feedback 1.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
