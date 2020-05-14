<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function signin(Request $request){

        $user=User::where('email','=',$request->email)->where('password','=',$request->password)->first();
        if($user){
            Auth::loginUsingId($user->id);
            if($user->type==3){
                return redirect('/admin');
            }
            else{
                return redirect('/staff');
            }
        }
        else{
            return redirect()->back()->withErrors([ 'Invalid email or password']);
        }
    }
    public function profile($id){
        $user=auth()->user();
        if(!$user){
            return redirect('login');
        }
        return view('user.profile',["user"=>$user]);
    }
    public function editProfile($id){
        $user=auth()->user();
        if(!$user){
            return redirect('login');
        }
        return view('user.editProfile',["user"=>$user]);
    }
    public function updateProfile($id,Request $request){
        $user=auth()->user();
        if(!$user){
            return redirect('login');
        }
        $request->validate([
            'name' => ['required'],
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => ['required', 'string', 'min:6'],
        ]);
        $user->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        return redirect('/system/profile/'.$user->id.'/profile');
    }
}
