<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class mahasiswa extends Model
{
	protected $table = 'tabel_mahasiswa';
	protected $primarykey = 'id';
	protected $fillable = ['nim',"nama","kelas","des"];
    use HasFactory;
}
