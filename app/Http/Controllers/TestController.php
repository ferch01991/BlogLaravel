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
        $article->user;
        dd($article);
    }
}
