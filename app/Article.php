<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    //Campos permitidos cuando trabajemos con objetos JSON
    protected $fillable = ['title', 'content,', 'category_id', 'user_id'];
}
