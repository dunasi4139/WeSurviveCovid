<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $table = 'articles';

    protected $fillable = [
        'judul',
        'gambar',
        'isi',
        'dokter_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'dokter_id');
    }
}
