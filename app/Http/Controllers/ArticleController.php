<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;

class ArticleController extends Controller {

    public function index()
    {
        return view('article.index');
    }

    public function read($id)
    {
        return view('article.read', ['article' => '21']);
    }
}

