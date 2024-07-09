<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikans extends Model
{
    use HasFactory;

    protected $fillable = ['nama_univ', 'lulusan', 'jurusan', 'gpa', 'tgl_lulus', 'description'];
}
