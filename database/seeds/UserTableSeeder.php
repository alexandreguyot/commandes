<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Guillaume Sourisseau',
            'email' => 'gsourisseau@nldi.eu',
            'password' => 'doublesky',
        ]);

        DB::table('users')->insert([
            'name' => 'Peggy Cabioch',
            'email' => 'pcabioch@nldi.eu',
            'password' => 'doublesky',
        ]);

        DB::table('users')->insert([
            'name' => 'Jérémy Guillard',
            'email' => 'jguillard@nldi.eu',
            'password' => 'doublesky',
        ]);

        DB::table('users')->insert([
            'name' => 'Emmanuel Noujaim',
            'email' => 'enoujaim@nldi.eu',
            'password' => 'doublesky',
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel Fazilleau',
            'email' => 'dfazilleau@nldi.eu',
            'password' => 'doublesky',
        ]);
    }
}
