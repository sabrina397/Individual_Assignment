<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function showAddStaffForm(){
        return view('admin.staff.add');
    }
    public function addStaff(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "type"=>1
        ]);
    }
}
