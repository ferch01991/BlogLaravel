<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    //Campos permitidos 
    protected $fillable = ['name'];

    // Este modelo categorias se va a relacionar con articulos, el nombre de la funcion es irrelevante
    public function articles(){

    	return $this->hasMany('App\Article');
    }

}
