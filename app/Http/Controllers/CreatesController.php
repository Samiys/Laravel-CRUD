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

        $input = $request->all();
        Article::create($input);

//        $articles = new Article;
//        $articles->title = $request->input('title');
//        $articles->description = $request->input('description');
//        $articles->save();
        //Session::flash('info', 'You successfully added Article!');

        return redirect('/')->with('info','You successfully added Article!');
    }

    public function update($id) {

        $articles = Article::find($id);
        return view('update', ['articles'=> $articles]);
    }

    public function edit($id, Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

//        $data = array(
//            'title' => $request->input('title'),
//            'description' => $request->input('description')
//        );
//        Article::where('id', $id)->update($data);
//        return redirect('/')->with('info','You successfully updated Article!');

        $articles = Article::findOrFail($id);

        $input = $request->all();
        $articles->fill($input)->save();

        return redirect('/')->with('info','You successfully updated Article!');

    }

    public function read($id) {

        $articles = Article::find($id);
        return view('read ', ['articles'=> $articles]);
    }

    public function delete($id) {

        $articles = Article::find($id);

        $articles->delete();

        return redirect('/')->with('info','You successfully deleted Article!');
        //return view('read ', ['articles'=> $articles]);
    }


}
