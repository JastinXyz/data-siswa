<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'nis' => "210383",
            'nama' => "Budi",
            'ttl' => "Banyumas, 22 November 2000",
            'kelas' => "X PPLG"
        ]);
    }
}
