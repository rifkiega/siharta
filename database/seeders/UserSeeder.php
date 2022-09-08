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
            'alamat' => 'Desa Lohbener, Kab Indramayu',
            'no_telp' => '089776129453',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $admin = User::create([
            'name' => 'Anastasya',
            'email' => 'pelapor@gmail.com',
            'alamat' => 'Desa Patrol, Kab Indramayu',
            'no_telp' => '089776129453',
            'password' => bcrypt('123456789'),
        ]);

        $admin->assignRole('pelapor');

        $admin = User::create([
            'name' => 'Rifki Ega S',
            'email' => 'pelapor2@gmail.com',
            'alamat' => 'Desa Patrol, Kab Indramayu',
            'no_telp' => '089776129453',
            'password' => bcrypt('123456789'),
        ]);

        $admin->assignRole('pelapor');

        // $dosen = User::create([
        //     'name' => 'Dosen',
        //     'email' => 'dosen@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // $dosen->assignRole('dosen');

        // $wadir = User::create([
        //     'name' => 'wadir',
        //     'email' => 'wadir@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // $wadir->assignRole('wadir');
    }
}
