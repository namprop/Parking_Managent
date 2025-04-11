<?php

namespace App\Utilities;


class Constant{
// User

const user_level_admin = 0;
const user_level_employee = 1;
const user_level_client = 2;

public static $user_level = [
    self::user_level_admin => 'admin',
    self::user_level_employee => 'employee',
    self::user_level_client => 'client',
];

}