<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    public function index(){

        $users = User::all();
        return view('admin.user.index',compact('users'));
    }
    
    public function create(){
        $roles = Role::get();
        return view('admin.user.create',compact('users','roles'));
    }

    public function store(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role;

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
