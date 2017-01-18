<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $lesArticles = Article::all();
        return view('admin.article.index')
                        ->with("tab_articles", $lesArticles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->session()->flash('success', 'L\'article à été Ajouté !');

        $article = new Article();

        $article->titre = $request->get('titre');
        $article->description = $request->get('editor');

        $article->save();
        return redirect()->route("article.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $lArticle = Article::find($id);
        return view('admin.article.edit')
                        ->with("article", $lArticle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $lArticle = Article::find($id);

        $lArticle->titre = $request->get('titre');
        $lArticle->description = $request->get('editor');

        $lArticle->save();

        return redirect()->route("article.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $request->session()->flash('success', 'L\'article à été Supprimé !');

        $article = Article::find($id);

        $article->delete();

        return redirect()->route("article.index");
    }

}
