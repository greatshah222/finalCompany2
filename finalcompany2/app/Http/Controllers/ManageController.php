<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ManageController extends Controller
{

    public function index()
    {
        return redirect()->route('manage.dashboard');
    }
    public function dashboard()
    {
       return view('manage.dashboard')
           ->with('posts_count',Post::all()->count())
           ->with('trashed_count',Post::onlyTrashed()->get()->count())
           ->with('users_count',User::all()->count())
           ->with('categories_count',Category::all()->count())
           ->with('tags_count',Tag::all()->count())


           ->with('settings',Setting::first()) ;

    }

}
