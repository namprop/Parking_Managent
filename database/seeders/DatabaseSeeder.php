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

        DB::table('price_lists')->insert([

            ['vehicle_type_id' => 1, 
            'duration_label' => '1 Giờ', 
            'duration' => 1, 
            'price' => 1200],

            ['vehicle_type_id' => 1, 'duration_label' => 'Nửa Ngày', 'duration' => 12, 'price' => 2000],
            ['vehicle_type_id' => 1, 'duration_label' => '1 Ngày', 'duration' => 24, 'price' => 3000],
            ['vehicle_type_id' => 1, 'duration_label' => '1 Tuần', 'duration' => 24*7, 'price' => 15000],
            ['vehicle_type_id' => 1, 'duration_label' => '1 Tháng', 'duration' => 24*30, 'price' => 50000],

            ['vehicle_type_id' => 2, 'duration_label' => '1 Giờ', 'duration' => 1, 'price' => 5000],
            ['vehicle_type_id' => 2, 'duration_label' => 'Nửa Ngày', 'duration' => 12, 'price' => 10000],
            ['vehicle_type_id' => 2, 'duration_label' => '1 Ngày', 'duration' => 24, 'price' => 15000],
            ['vehicle_type_id' => 2, 'duration_label' => '1 Tuần', 'duration' => 24*7, 'price' => 50000],
            ['vehicle_type_id' => 2, 'duration_label' => '1 Tháng', 'duration' => 24*30, 'price' => 100000],

            ['vehicle_type_id' => 3, 'duration_label' => '1 Giờ', 'duration' => 1, 'price' => 20000],
            ['vehicle_type_id' => 3, 'duration_label' => 'Nửa Ngày', 'duration' => 12, 'price' => 40000],
            ['vehicle_type_id' => 3, 'duration_label' => '1 Ngày', 'duration' => 24, 'price' => 60000],
            ['vehicle_type_id' => 3, 'duration_label' => '1 Tuần', 'duration' => 24*7, 'price' => 200000],
            ['vehicle_type_id' => 3, 'duration_label' => '1 Tháng', 'duration' => 24*30, 'price' => 500000],

        ]);
           



        // DB::table('price_lists')->insert([
        //     [
        //         'vehicle_type_id' => 1,
        //         'price_one_hour' => 1000,
        //         'price_half_day' => 2000,
        //         'price_full_day' => 3000,
        //         'price_week' => 15000,
        //         'price_month' => 50000,
        //     ],
        //     [
        //         'vehicle_type_id' => 2,
        //         'price_one_hour' => 5000,
        //         'price_half_day' => 10000,
        //         'price_full_day' => 15000,
        //         'price_week' => 50000,
        //         'price_month' => 100000,
        //     ],
        //     [
        //         'vehicle_type_id' => 3,
        //         'price_one_hour' => 20000,
        //         'price_half_day' => 40000,
        //         'price_full_day' => 60000,
        //         'price_week' => 200000,
        //         'price_month' => 500000,
        //     ],
        // ]);


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
