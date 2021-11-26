<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public $table = 'provinces';

    protected $fillable = [
        'id',
        'name',
    ];
    public function tempat_vaksin(){
        return $this->hasMany(TempatVaksin::class,'province_id');
    }
}
