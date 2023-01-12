<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $table = 'Vote';
    protected $fillable = [
        'user_id',
        'gallery_id',
    ];

    public function gallery(){
        return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }   
}
