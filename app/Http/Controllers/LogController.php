<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;

class LogController extends Controller
{
    //
    public function enter() {
        return view('user.login',[]);
    }
    public function login(Request $request) {
        $users = Users::all();
        foreach ($users as $user) {
            if ($user->email == $request->email) {
                if ($user->password == $request->password) {
                    return view('user.index', compact('users'));
                }
            }
            return 'FOO';
        }

        return view('user.login',[]);
    }

}
