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

    public function add(Request $request) { //Request $request for validation

         $this->validate($request, [
              'title' => 'required',
              'description' => 'required'
         ]);

        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info','Article Saved Successfully!');
    }
}
