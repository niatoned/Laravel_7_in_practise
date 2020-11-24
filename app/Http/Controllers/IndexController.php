<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $categories = \App\Category::all();

        return view('welcome', ['allCategories' => $categories]);
    }
}
