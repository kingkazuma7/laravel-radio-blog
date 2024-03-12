<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $data = ['articles' => $articles];
        return view('articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Article();
        $data = ['article' => $article];
        return view('articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return redirect(route('articles.index'));
    }

    /**
     * 詳細画面
     */
    public function show(Article $article)
    {
        $data = ['article' => $article];
        return view('articles.show', $data);
    }

    /**
     * 編集画面
     */
    public function edit(Article $article)
    {
        $data = ['article' => $article];
        return view('articles.edit', $data);
    }

    /**
     * 更新処理
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return redirect(route('articles.show', $article));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'));
    }
}
