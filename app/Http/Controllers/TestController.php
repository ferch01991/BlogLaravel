<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class TestController extends Controller
{
    
    public function view($id)
    {
        //funcion helper que nos trae Laravel
        $article = Article::find($id);
        //dd($article);

        //Retornamos a la valores a la vista que se encuentra en la carpeta test de view.
        return view('test.index',['article' => $article]);
    }
}
