<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;

class HomeController extends Controller {

    public function index($name)
    {
        return view('home.index', ['name' => $name]);
    }
}
