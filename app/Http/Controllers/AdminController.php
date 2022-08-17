<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class AdminController extends Controller
{

    public function show(){

        return view('login.index');
    }

    public function verify(Request $request){
//     $admin = DB::table('admins')->where('email',$request->username)
//                                       -> where('password',$request->password)
//                                        ->first();
        $admin = Admin::where('email',$request->username)
                            ->where('password',$request->password)
                            ->first();
       if ($admin!==NULL)
       {
           if($admin->email==$request->username and $admin->password== $request->password)
                {
           return redirect()->route('panel.system');
                }
     }
       else{
           echo 'Incorrect username or password';
           die;
       }

    }
}
