<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
        	'nama_kategori' => "Pakaian",
        	'deskripsi' => "Semua Jenis Pakaian"
        ]);

        DB::table('kategori')->insert([
        	'nama_kategori' => "Pakaian Pria",
        	'deskripsi' => "Semua Jenis Pakaian Pria"
        ]);
    }
}
