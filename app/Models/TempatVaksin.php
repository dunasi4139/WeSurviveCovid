<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatVaksin extends Model
{
    use HasFactory;
    public $table = 'tempat_vaksin';

    protected $fillable = [
        'id',
        'nama',
        'jadwal',
        'syarat',
        'alamat',
        'jenis',
        'province_id',
        'gambar'
    ];

    public function province() {
        return $this->belongsTo(Province::class, 'province_id');
    }

}
