<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'views',
    ];

    public function like(){
        return $this->hasMany(Likes::class, 'gallery_id' , 'id');
    }

    public function vote(){
        return $this->hasMany(Vote::class, 'gallery_id','id');
    }
}
