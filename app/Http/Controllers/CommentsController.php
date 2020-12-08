<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Article $article){

    	request()->validate([
    		'body'=>'required|max:255'
    	]);

    	Comment::create([
    		'article_id'=>$article->id,
    		'user_id'=>auth()->id(),
    		'body'=>request('body')
    	]);

    	return back();
}
