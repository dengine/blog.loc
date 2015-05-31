<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;

class HomeController extends Controller {

    public function index()
    {
        return view('home.index');
    }
}
