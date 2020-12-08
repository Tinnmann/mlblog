<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticlesController extends Controller
{
    public function store(){

    	request()->validate([
    		'title'=>'required','body'=>'required|max:255'
    	]);

    	Article::create([
    		'user_id'=>auth()->id(),
    		'title'=>request('title'),
    		'body'=>request('body')
    	]);

    	return redirect('/dashboard');

    }

    public function show($id){
        $article = Article::find($id);
        //$users = User::all();

        return view('/show', ['article'=>$article], ['users'=>User::all()]);
    }

    // public function index(){
    //     return view('dashboard',[
    //         'articles'=>auth()->user()->timeline()
    //     ]);
    // }
}
