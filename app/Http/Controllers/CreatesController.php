<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home() {

        //Article is model which interacts with database
        //Fetching entire records from articles table with it
        $articles = Article::all();

        return view('home', ['articles'=> $articles]);
    }
}
