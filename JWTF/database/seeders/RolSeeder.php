<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('roles')->insert([
            'rol' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'rol' => 'Employee',
        ]);

        DB::table('roles')->insert([
            'rol' => 'Guest',
        ]);
    }
}
