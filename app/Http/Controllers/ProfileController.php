<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usersmodel;
use App\Position;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index($id){
        $user = Usersmodel::find($id);
        $posi= Position::get();
        $use=Auth::user();
        return view('edit',[
            'user'=>$user,
            'posi'=>$posi,
            'use'=>$use
        ]);
    }
    public function editsub(Request $request){
        $user=Usersmodel::find($request->id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->positons=$request->positions;
        $user->save();
        return redirect()->back()->withInput();

    }

    public function delete($id){
        $user= Usersmodel::find($id);
        $u=Usersmodel::destroy($user->id);
        if($u){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }
}
