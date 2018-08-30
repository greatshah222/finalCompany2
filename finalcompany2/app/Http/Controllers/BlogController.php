<?php

namespace App\Http\Controllers;

use App\Post;
use App\Setting;
use Illuminate\Http\Request;
use App\Mail;

class BlogController extends Controller
{

    public  function getIndex()
    {
        $posts=Post::orderBy('id','desc')->paginate(5);
$post1 = Post::orderByRaw('RAND()')->limit(1)->get();
        return view('blog.index')->withPost($post1)->withPosts($posts)
            ->with('settings',Setting::first());
    }



    public function getSingle($slug)
    {
        $posts=Post::orderByRaw('RAND()')->limit(2)->get();
    $post =Post::where('slug','=',$slug)->first();
   return view('blog.single')->withPost($post)->withposts($posts)
       ->with('settings',Setting::first());

    }





}
