<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    //Campos permitidos 
    protected $fillable = ['name', 'article_id'];
}