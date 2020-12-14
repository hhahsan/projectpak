<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                
                'nip'           => 'admin',
                'nama'          => 'Admin1',
                'email'         => 'admin@mail.com',
                'password'      => Hash::make('admin'), 
                'level_id'      => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                
                'nip'           => 'pegawai',
                'nama'          => 'Pegawai1',
                'email'         => 'pegawai@mail.com',
                'password'      => Hash::make('pegawai'), 
                'level_id'      => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ]);
    }
}
