<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){

        $users = User::All();
        return view('admin.user.index',compact('users'));
    }
    
    public function create(){

        return view('admin.user.create');
    }

    public function store(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save())
        {
            return redirect()->route("users.index");
        }
    }

    public function show(User $user){
        return view('admin.user.show',compact('user'));
    }

    public function destroy(User $user){
        if($user->delete()){
            return redirect()->route('users.index');
        }
    }
}
