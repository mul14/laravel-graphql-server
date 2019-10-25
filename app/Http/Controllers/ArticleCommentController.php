<?php

namespace App\Http\Controllers;

use App\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ArticleComment::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttributes = $this->validateAttributes();

        return ArticleComment::create($validatedAttributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleComment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Article $comment)
    {
        return $comment;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleComment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $comment)
    {
        $validatedAttributes = $this->validateAttributes();

        return $comment->update($validatedAttributes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleComment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $comment)
    {
        return $comment->delete();
    }

    private function validateAttributes()
    {
        return request()->validate([
            'user_id' => 'required',
            'comment' => 'required',
        ]);
    }
}
