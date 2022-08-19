<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class AdminController extends Controller
{

    public function show(){

        return view('login.index');
    }

    public function verify(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
//        $admin = Admin::where('email',$request->username)
//                            ->where('password',$request->password)
//                            ->first();
        $admin =$request->only('email','password');
        $ad=Auth::attempt($admin);
        dd($ad);
           if(Auth::attempt($admin))
                {
                    return redirect()->route('panel.system');
                }


           return 'Incorrect username or password';

    }
}


//public function handelLogin(Request $request)
//{
//    $request->validate([
//        'email'=>'required|email|min:10|max:100',
//        'password'=>'required|string|min:6|max:30',
//    ]);
//    $is_login = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
//
//    if(!$is_login){
//        return back();
//    }
//
//    return redirect(route('Home'));
//}
