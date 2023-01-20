<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usersmodel;
use App\Position;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class LoginController extends Controller
{

    public function index(){
        $user = Usersmodel::get();
        $posi= Position::get();
        $use=Auth::user();
        return view('index',[
            'user'=>$user,
            'posi'=>$posi,
            'use'=>$use
        ]);
    }

    public function login(){
        return view('pages-sign-in');
    }


    public function ligin_func(Request $r){
        if(Auth::attempt(['username' => $r->username, 'password' => $r->password])){
            $use=Auth::user();
            $user=Usersmodel::find($use->id);
            $user->last_login_at = Carbon::now();
            $user->save();
            return redirect('/');
        }else{
            return redirect()->back()->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();$request->session()->invalidate();
        return redirect("pages-sign-in");
    }
}
