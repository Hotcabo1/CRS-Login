<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'username' => 'OptimusJuan1999',
            'email' => 'Juanin@gmail.com',
            'password' => 'cisco123$$',
            'online' => '1',
            'usertype' => 'AD',
            'zone' => 'Centro',
            'client' => 'DHL',
            'status' => 'activo'
        ]);
        User::create([
            'name' => 'Rodrigo',
            'username' => 'RodriVera',
            'email' => 'Juanin@gmail.com',
            'password' => 'cisco123$$',
            'online' => '1',
            'usertype' => 'G',
            'zone' => 'Centro',
            'client' => 'Salinas',
            'status' => 'activo'
        ]);
        User::create([
            'name' => 'Jesus Albertanos',
            'username' => 'Kalastrakas70000',
            'email' => 'Juanin@gmail.com',
            'password' => 'cisco123$$',
            'online' => '1',
            'usertype' => 'G',
            'zone' => 'Centro',
            'client' => 'Elektra',
            'status' => 'activo'
        ]);

    }
}
