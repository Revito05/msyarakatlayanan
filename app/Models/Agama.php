<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;

    // Tabel yang terkait dengan model
    protected $table = 'agama';

    // Field yang bisa diisi
    protected $fillable = ['nama_agama'];
}