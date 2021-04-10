<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index(){

        //Render a List of a resource

        $articles = Article::latest()->get();

        return view('articles.index',['articles'=>$articles]);
    }

    public function show(Article $article){

        //Show a single resource


        return view('articles.show',['article'=>$article]);
    }

    public function create(){

        //Shows a view  to create  a new resource

        return view('articles.create');

    }

    public function store(){

        // Persist  the new  resource
        //dump(request()->all());
        //die('hello');
       // dd('hi');


        Article::create($this->ValidateArticle());


//        $article = new Article();
//
//        $article->title = request('title');
//        $article->excerpt = request('excerpt');
//        $article->body = request('body');
//
//        $article->save();

//        Article::create([
//            'title' => request('title'),
//            'excerpt' => request('excerpt'),
//            'body' => request('body')
//        ]);
        return redirect('/articles');



    }

    public function edit(Article $article){

        //Show a view  to edit an existing resource


        return view('articles.edit',compact('article'));

    }

    public function update(Article $article){

        $article->update($this->ValidateArticle());

        //Persist the edited resource

//        $article->title = request('title');
//        $article->excerpt = request('excerpt');
//        $article->body = request('body');
//
//        $article->save();

        return redirect('/articles/'.$article->id);

    }

    public function destroy(){

        //Delete  the resource

    }

    /**
     * @return array
     */
    public function ValidateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'

        ]);
    }
}
