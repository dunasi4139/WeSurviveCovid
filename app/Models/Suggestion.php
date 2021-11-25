<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    public $table = 'sarans';

    protected $fillable = [
        'judul',
        'gambar',
        'isi',
    ];
}
