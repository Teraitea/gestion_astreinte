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
        return view('users.users',['users'=>$users]);
    }

    public function listUser($userId)
    {
        $user = User::find($userId);
        // dd($users);
        return view('users.user',['user'=>$user]);
    }

    public function editUser($userId)
    {
        $user = User::find($userId);
        return view('users.edit-user', ['user'=>$user]);
    }

    public function update(Request $request, $userId)
    {
        $user = User::find($userId);
        $this->validate(request(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
          ]);

        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect('/home/users')->with('success',"L'utilisateur à bien été modifié");
    }

    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete();
        return redirect('/home/users')->with('success',"L'utilisateur à bien été suprimé");
    }
}
