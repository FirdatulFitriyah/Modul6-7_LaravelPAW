<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nrp' => '200411100020',
            'nama' => 'Firdatul Fitriyah',
            'email' => 'firda@gmail.com',
            'alamat' => 'pamekasan',
        ]);
    }
}
