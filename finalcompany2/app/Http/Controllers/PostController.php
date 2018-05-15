<?php

namespace App\Http\Controllers;

use App\Post;
use App\Front;

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
        return view('posts.create');
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
            'slug' => 'required|alpha_dash|min:5|max:25|unique:posts,slug'

        ));

            // store in the db
            $post =new Post;
            $post->title= $request->title;
        $post->slug= $request->slug;
        $post->body= $request->body;

        $post->save();

return redirect()->route('posts.show',$post->id);




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
        return view('posts.edit')->withPost($post);

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
        $post =Post::find($id);
        if ($request->input('slug')==$post->slug )

        {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',

            ));

        } else
        {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:25|unique:posts,slug'

            ));
        }


        // store in the db
        $post =Post::find($id);
        $post->title= $request->input('title');
        $post->slug= $request->input('slug');

        $post->body= $request->input('body');
        $post->save();

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

}
