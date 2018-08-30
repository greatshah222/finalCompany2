<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Setting;
use App\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts=Post::orderBy('created_at','desc')->limit(3)->get();
        return view('front.home')->withposts($posts)
            ->with('settings',Setting::first());



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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }







    public function getContact() {
        return view('contact.contact');
    }

    public function postContactme(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'name'=>'required',
            'telephone'=>'required',
            'message' => 'min:3']);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'name'=> $request->name,
            'telephone'=>$request->telephone,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('great.shah222@gmail.com');
            $message->subject($data['subject']);
        });
        Mail::send('emails.admincontact', $data, function($message) use ($data){
            $message->to($data['email']);
            $message->from('great.shah222@gmail.com');
            $message->subject('Thankyou for contacting');
        });

Session::flash('success','Message Sent.Thanks for contacting ');
        return redirect()->back();
    }
    public function subscribeindex ()
    {
        return view('front.subcribenew');
    }
public function subscribe(Request $request)
{
$this->validate($request,[
    'email' => 'required|email'

]);
$data = array(
    'email' => $request->email


);
    Mail::send('emails.subscribe', $data, function($message) use ($data){
        $message->to($data['email']);
        $message->from('great.shah222@gmail.com');
        $message->subject('Thankyou for Subscribing');
    });
    Session::flash('success','Subscription Added');

    return redirect()->route('blog.index');

}



}
