<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas')->insert([
        	'namaKota' => 'Jakarta',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Karawang',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Madiun',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Balikpapan',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Malang',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Bandung',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Cirebon',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Pati',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Sulawesi Tengah',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Kepulauan Riau',
        ]);

        DB::table('zonas')->insert([
        	'namaKota' => 'Lampung',
        ]);
    }
}
