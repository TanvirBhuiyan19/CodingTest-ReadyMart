<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'content', 'section', 'title',
        'image', 'video', 'description',
        'action',
    ];
    

}
