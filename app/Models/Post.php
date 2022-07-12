<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // on cree une var proteger et on lui passe les data kon va recuperer dans le controller pour pouvoir creer
    protected $fillable = [
        'title',
        'content'
    ];
}
