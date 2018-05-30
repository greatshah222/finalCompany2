<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Front;
use App\Tag;

use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable a store the variable in in form the database

        $posts=Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
        // return a viewa nd padd in tyhe above



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();

        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate first company2
        // redirect wherever u wish

        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id'=>'required|integer',
            'featured'=>'sometimes|image',
            'slug' => 'required|alpha_dash|min:5|max:25|unique:posts,slug'

        ));
        $post =new Post;
        $post->title= $request->title;
        $post->slug= $request->slug;
        $post->body= $request->body;
        $post->category_id=$request->category_id;

        if($request->hasFile('featured'))
        {
            $image = $request->file('featured');
            $filename =time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('postimages/' .$filename);
            Image::make($image)->resize(640,426)->save($location);
            $post->featured =$filename;


        }

        $post->save();
        $post->tags()->sync($request->tags,false);

        return redirect()->route('posts.show',$post->id);



        // store in the db



    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
$post= Post::find($id);
return view('posts.show')->withPost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the db and sava it as variable
        $post= Post::find($id);
        $tags=Tag::all();
        $categories=Category::all();
        $cats=array();
        foreach ($categories as $category)
        {
           $cats[$category->id]  =$category->name;
        }

        $tags2 =array();
        foreach ($tags as $tag){
            $tags2[$tag->id] =$tag->name;
        }

        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);

        // return view and pass the info

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',
                'category_id'=>'required|integer',
                'featured'=>'image',

                'slug' => "required|alpha_dash|min:5|max:25|unique:posts,slug,$id"

            ));



        // store in the db
        $post =Post::find($id);

        $post->title= $request->input('title');
        $post->slug= $request->input('slug');
        $post->category_id= $request->input('category_id');


        $post->body= $request->input('body');

        if($request->hasFile('featured'))
        {
            $image = $request->file('featured');
            $filename =time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('postimages/' .$filename);
            Image::make($image)->resize(640,426)->save($location);

            $oldFileName=$post->featured;
            $post->featured =$filename;
            Storage::delete($oldFileName);

        }
        $post->save();
        $post->tags()->sync($request->tags,true);


        return redirect()->route('posts.show',$post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');


    }
    public function trashed()
    {

        $post = Post::onlyTrashed()->get();

        return view('posts.trashed')->with('posts',$post);
    }
    public function kill($id)
    {
        $post =Post::withTrashed()->where('id',$id)->first();
        $post->tags()->detach();

        $post->forceDelete();
        return redirect()->route('posts.trashed');



    }

    public function restore($id)
    {
        $post =Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('posts.trashed');


    }


}
