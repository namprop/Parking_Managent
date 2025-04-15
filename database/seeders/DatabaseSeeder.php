<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

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
                'name' => 'Admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Nhan Vien 1',
                'email' => 'employee@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Nhan Vien 2',
                'email' => 'employee1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 1,
            ],
        ]);


        DB::table('vehicle_types')->insert([
            [
                'vehicle_code' => 'XD',
                'vehicle_name' => 'Xe Dap',

            ],
        ]);
        DB::table('vehicle_types')->insert([
            [
                'vehicle_code' => 'XM',
                'vehicle_name' => 'Xe May',

            ],
        ]);
        DB::table('vehicle_types')->insert([
            [
                'vehicle_code' => 'OT',
                'vehicle_name' => 'O To',

            ],
        ]);

        DB::table('vehicles')->insert([
            [
                'vehicle_types_id' => '1',
                'sender_name' => 'Nguyen Van A',
                'license_plate' => '',
            ],
            [
                'vehicle_types_id' => '2',
                'sender_name' => 'Nguyen Van B',
                'license_plate' => '22C1-67894',

            ],
            [
                'vehicle_types_id' => '3',
                'sender_name' => 'Nguyen Van C',
                'lincense_plate' => '11H1-111111',
            ],
        ]);


        DB::table('pricing_rules')->insert([

            [
                'vehicle_type_id' => 1,
                'day_of_week' => 'Mon-Fri',
                'price' => 5000,
                'start_time' => '22:00:00',
                'end_time' => '06:00:00',
                
            ],
            [
                'vehicle_type_id' => 1,
                'day_of_week' => 'Mon-Fri',
                'price' => 3000,
                'start_time' => '06:00:00',
                'end_time' => '22:00:00',
            ]

        ]);

        DB::table('transactions')->insert([
            [
                'employee_name' => 'Nhan Vien C',
                'sender' => 'Nguyễn Văn A',
                'vehicle_name' => 'O To',
                'license_plate' => '29A-12345',
                'check_in' => '2024/04/13',  
                'check_out' => '2024/04/14',  
                'price' => 150000,  
                'payment_method' => 'tiền mặt',  
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
