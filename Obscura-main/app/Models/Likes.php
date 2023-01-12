<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    protected $table = 'likes';
    protected $fillable = [
        'gallery_id',
        'user_id'
    ];

    public function gallery(){
        return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
