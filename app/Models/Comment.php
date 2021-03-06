<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $table = 'comments';

    protected $fillable = [
        'user_id',
        'post_id',
        'isi'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function post() {
        return $this->belongsTo(Comment::class, 'post_id');
    }

    public function like() {
        return $this->hasMany(Like::class, 'post_id');
    }
}
