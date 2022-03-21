<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class UserController extends Controller
{

    public function edit()
    {
        $user = User::find(Auth::id());
       // $history = History::all()->where('id_user','==', Auth::id());
        $history = History::query()->where('id_user','=',Auth::id())->get();
        return view('edit', ['info'=>['history'=>$history, 'user'=>$user]]);
    }

    public function update()
    {
        $user = User::find(Auth::id());
        return view('update', ['user'=>$user]);
    }

    public function addUpdate(UserRequest $req)
    {
        $user = User::find(Auth::id());

        //$history = History::all()->where('id_user','=', Auth::id());
        $user->name = $req->input('name');
        $user->email = $req->input('email');

        $user->save();
        //return view('update', ['info'=>['history'=>$history, 'user'=>$user]]);
        return view('update', ['user'=>$user]);
    }
}
