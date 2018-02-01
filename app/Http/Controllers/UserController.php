<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    public function listUsers()
    {
        $users = User::all();
        // dd($users);
        return view('users.users',['users'=>$users]);
    }

    public function listUser($userId)
    {
        $user = User::find($userId);
        // dd($users);
        return view('users.user',['user'=>$user]);
    }
}
