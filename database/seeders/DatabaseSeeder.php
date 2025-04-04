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

        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
            ],
        ]);

        DB::table('vehicle_types')->insert([
            [
                'maloaixe' => 'XD',
                'tenloaixe' => 'Xe Dap',

            ],
        ]);
        DB::table('vehicle_types')->insert([
            [
                'maloaixe' => 'XM',
                'tenloaixe' => 'Xe May',

            ],
        ]);
        DB::table('vehicle_types')->insert([
            [
                'maloaixe' => 'OT',
                'tenloaixe' => 'O To',

            ],
        ]);

        DB::table('vehicles')->insert([
            [
                'vehicle_types_id' => '1',
                'tennguoigui' => 'Nguyen Van A',
                'bienso' => '',
                'ngaygui' => '2024-04-03',
            ],
            [
                'vehicle_types_id' => '2',
                'tennguoigui' => 'Nguyen Van B',
                'bienso' => '22C1-67894',
                'ngaygui' => '2024-04-03',
            ],
            [
                'vehicle_types_id' => '3',
                'tennguoigui' => 'Nguyen Van C',
                'bienso' => '11H1-111111',
                'ngaygui' => '2024-04-03',
            ],
        ]);

        // DB::table('vehicles')->insert([
        //     [
        //         'user_id' => '5',
        //         'license_plate' => '51B1-67894',
        //         'vehicle_type' => 'motorbike',
        //         'brand' => 'Suziki',

        //     ],
        // ]);

        // DB::table('parking_slots')->insert([
        //     [
        //         'slot_number' => '3',
        //         'status' => 'available',

        //     ],
        // ]);


        // DB::table('parking_tickets')->insert([
        //     [
        //         'user_id' => '3',
        //         'vehicle_id' => '1',
        //         'parking_slot_id' => '1',
        //         'license_plate' => '29X7-67895',
        //         'check_in' => '2024-04-03 12:00:00',
        //         'check_out' => '2024-04-03 13:00:00',
        //     ],
        // ]);


        // DB::table('parking_tickets')->insert([
        //     [
        //         'user_id' => '3',
        //         'parking_ticket_id' => '1',
        //         'amount'=> 3.00,
        //         'status' => 'pending',
        //         'transaction_date' => null
        //     ],
        // ]);


    }
}
