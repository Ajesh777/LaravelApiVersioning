<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 7.0.1: Import Articles Db:
use App\Article;
// 7.0.2: Import Http Requests:
use App\Http\Requests;
// 7.0.3: Import Article Resource:
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 7.1.1: Get Articles:
        $articles = Article::paginate(10);
        // 7.1.2: Return Collection of articles as a resource:
        return ArticleResource::collection($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 7.3.1: Check if its PUT request:
        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article;
        // 7.3.2: Input as article fields:
        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        // 7.3.3: Saving Article:
        if($article->save()) {
            return new ArticleResource($article);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 7.2.1: Get the Article with the $id:
        $article = Article::findOrFail($id);
        // 7.2.2: Return the found Article:
        return new ArticleResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 7.4.1: Get the Article with the $id:
        $article = Article::findOrFail($id);
        // 7.4.2: 
        if($article->delete()){
            return new ArticleResource($article);
        }
    }
}
