<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateStatusUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')
            ->where('id', 1) 
            ->update([
                'status' => true,  
            ]);
    }
}

// Create Seeder: php artisan make:seeder UpdateStatusUsersTable
// Run Seeder: php artisan db:seed --class=UpdateStatusUsersTable