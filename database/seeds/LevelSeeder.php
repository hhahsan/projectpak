<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::insert([
            [
                
                'nama'          => 'admin',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                
                'nama'          => 'guru',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                
                'nama'          => 'pegawai',
                'created_at'    => now(),
                'updated_at'    => now()
            ]
        ]);
    }
}
