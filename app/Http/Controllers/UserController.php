<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listUsers()
    {
        $userID = Auth::user()->user_type_id;
        if($userID == 1):
            $users = User::all();
            return view('users.users',['users'=>$users]);
        else:
            return redirect('/home')->with('success',"Seuls les administrateurs peuvent accéder au informations des utilisateurs");
        endif;
    }

    public function listUser($userId)
    {
        $userID = Auth::user()->user_type_id;
        if($userID == 1):
            $user = User::find($userId);
            return view('users.user',['user'=>$user]);
        else:
            return redirect('/home')->with('success',"Seuls les administrateurs peuvent accéder au informations des utilisateurs");
        endif;
    }

    public function editUser($userId)
    {
        $userID = Auth::user()->user_type_id;
        if($userID == 1):
            $user = User::find($userId);
        return view('users.edit-user', ['user'=>$user]);
        else:
            return redirect('/home')->with('success',"Seuls les administrateurs peuvent accéder au informations des utilisateurs");
        endif;
    }

    public function update(Request $request, $userId)
    {
        $userID = Auth::user()->user_type_id;
        if($userID == 1):
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
        else:
            return redirect('/home')->with('success',"Seuls les administrateurs peuvent accéder au informations des utilisateurs");
        endif;
    }

    public function destroy($userId)
    {
        $userID = Auth::user()->user_type_id;
        if($userID == 1):
            $user = User::find($userId);
            $user->delete();
            return redirect('/home/users')->with('success',"L'utilisateur à bien été suprimé");
        else:
            return redirect('/home')->with('success',"Seuls les administrateurs peuvent accéder au informations des utilisateurs");
        endif;
    }
}
