<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);    

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admon@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        $admin->assignRole('admin');

        $dosen = User::create([
            'name' => 'Dosen',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $dosen->assignRole('dosen');
        
        $wadir = User::create([
            'name' => 'wadir',
            'email' => 'wadir@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $wadir->assignRole('wadir');


        
    }
}
