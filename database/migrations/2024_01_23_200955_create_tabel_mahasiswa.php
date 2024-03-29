<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('kelas');
            $table->text('des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_mahasiswa');
    }
};
