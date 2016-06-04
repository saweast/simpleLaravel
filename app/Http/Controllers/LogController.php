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
                    $request->session()->put('auth', 'Authorized');
                    $auth = $request->session()->get('auth');
                    return view('user.index', ['users'=>$users, 'auth'=>$auth]);
                }
            }
            $request->session()->forget('auth');
            $request->session()->flush();
            return view('user.login');
        }
        return view('user.login',[]);
    }
    public function logout(Request $request) {
        $request->session()->forget('auth');
        $request->session()->flush();
        return view('user.login');
    }

}
