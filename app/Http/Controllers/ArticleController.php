<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Artricle::all();
        return view('home',['articles'=>$articles]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles_create');
    }



    public function store(ArticleStoreRequest $request)
    {
        $data = $request->validated(); 
        Article::create($data);
        return redirect('/')->with('success','Article Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $articles = Article::find($article->id);
        return view('articles_show',['articles'=>$articles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $articles = Article::find($article->id);
        return view('articles_edit',['articles'=>$articles]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleStoreRequest $request, Article $article)
    {
        
        $article->name = $request->name;
        $article->content = $request->content;
        $article->save();
        return redirect('/')->with('success','Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/')->with('success','Article Deleted successfully');
    }
}
