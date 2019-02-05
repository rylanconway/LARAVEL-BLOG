<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Repositories\Posts;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Input;


use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except(['index','show']);

    }


    public function index()
    {

        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);

    }



    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));


    }


    public function create()
    {
        return view('posts.create');
    }


    public function delete()
    {

        $post = Post::find((Input::get('id')));
        $post->delete();
        return redirect('/home');

//        return view('manage.themeEdit');
    }


    public function store()
    {
        $this->validate(request(), [

            'body' => 'required'

        ]);

        $post = new Post;

        $post->body = Input::get('body');

        $post->title = Input::get('title');


        $post->save();

        return redirect('home');


    }
}
