<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrok\EloquentSluggable\SluggableInterface;
use Cviebrok\EloquentSluggable\SluggableTrait;

class Article extends Model
{

    //use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    protected $table = "articles";

    //Campos permitidos cuando trabajemos con objetos JSON
    protected $fillable = ['title', 'content,', 'category_id', 'user_id'];

    // Funcion que realiza de manera inversa la recion entre Article y Category
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    // Funcion que realiza de manera inverza la relacion con Users
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    // Esta funcion hace referencia a la relacion con Image
    public function image()
    {
    	return $this->hasMany('App\Image');
    }

    //Un articlulo puede tener muchos tags
    public function tag()
    {
    	return $this->belongsToMany('App\Tag');
    }

}
