<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $table = 'posts';

    protected $fillable = [
        'user_id',
        'judul',
        'gambar',
        'isi',
        'like',
    ];

    public static function count($id)
    {
        return Comment::where('post_id', $id)->count();
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
