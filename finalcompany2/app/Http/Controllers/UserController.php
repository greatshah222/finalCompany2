<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $users=User::orderBy('id','desc')->paginate(5);


        return view('manage.users.index')->withusers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('manage.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',

        ]);
$user =User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt('password')

]);

   $profile = Profile::create([
       'user_id'=>$user->id

   ]);













        if($user->save() || ($profile->save()))
{

    return redirect()->route('users.show',$user->id);
}
else{
    return redirect()->route('users.create');
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
        $user = User::findOrFail($id);
        return view("manage.users.show")->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =User::findOrFail($id);
        return view("manage.users.edit")->withUser($user);

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
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users,email,'.$id

        ]);
        $user=User::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        if($user->save())
        {
            return redirect()->route('users.show',$id);
        }
        else{
            return redirect()->route('users.edit',$id);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {




        $user =User::find($id);
        $user->profile->delete();
        $user->delete();
        return redirect()->back();
    }
    public function profile()
    {
        $users=User::all();

        return view('manage.users.profile')->withUser($users);

    }
    public function admin($id)
    {
        $users =User::find($id);
        $users->admin=1;
        $users->save();
        return redirect()->back();
    }


    public function not_admin($id)
    {
        $user =User::find($id);
        $user->admin=0;
        $user->save();
        return redirect()->back();
    }
}
