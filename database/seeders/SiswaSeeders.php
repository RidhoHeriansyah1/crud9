<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('siswas')->insert([
            'nama' => 'Ridho Heriansyah',
            'nis' => '2121234',
            'alamat' => 'Jln Pangauban',
        ]);
    }
}
