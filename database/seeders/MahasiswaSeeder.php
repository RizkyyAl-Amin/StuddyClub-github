<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('tabel_mahasiswa')->insert([
        	'nim' => "021",
        	'nama' => "Erlan",
        	'kelas' => "r1",
        	'des' => "Dari ruang 1",
        ]);
         DB::table('tabel_mahasiswa')->insert([
        	'nim' => "022",
        	'nama' => "Aji",
        	'kelas' => "r2",
        	'des' => "Dari ruang 2",
        ]);
         DB::table('tabel_mahasiswa')->insert([
        	'nim' => "023",
        	'nama' => "Edo",
        	'kelas' => "r3",
        	'des' => "Dari ruang 3",
        ]);
    }
}
