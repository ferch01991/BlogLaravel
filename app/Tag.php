<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    //Campos permitidos 
    protected $fillable = ['name'];
}
