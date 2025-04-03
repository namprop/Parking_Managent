<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
            ],
        ]);

        DB::table('vehicles')->insert([
            [
                'user_id' => '1',
                'license_plate' => '29X7-67895',
                'vehicle_type' => 'motorbike',
                'brand' => 'Honda',
                
            ],
        ]);

        DB::table('vehicles')->insert([
            [
                'user_id' => '2',
                'license_plate' => '51B1-67895',
                'vehicle_type' => 'motorbike',
                'brand' => 'Suziki',
                
            ],
        ]);


    }
}
