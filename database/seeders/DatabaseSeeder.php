<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ADMIN')->insert([
            "ADMIN_USERNAME" => "admin",
            "password" => Hash::make(123456),
            "ADMIN_FNAME" => "admin",
            "ADMIN_LNAME" => "admin",
            "ADMIN_EMAIL" => "admin@admin.com",
            "ADMIN_ROLE" => "admin",
        ]);
    }
}
