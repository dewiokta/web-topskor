<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KelompokUsiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelompok_usias')->insert([
        	'usia' => 'U-13',
        ]);

        DB::table('kelompok_usias')->insert([
        	'usia' => 'U-14',
        ]);

        DB::table('kelompok_usias')->insert([
        	'usia' => 'U-15',
        ]);

        DB::table('kelompok_usias')->insert([
        	'usia' => 'U-16',
        ]);

        DB::table('kelompok_usias')->insert([
        	'usia' => 'U-17',
        ]);

        DB::table('kelompok_usias')->insert([
        	'usia' => 'U-18',
        ]);
    }
}
