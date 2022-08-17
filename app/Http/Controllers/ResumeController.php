<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function view(){
        $exp = DB::table('experiences')->orderBy('id',"DESC")->get();
        $edu=DB::table('education')->orderBy('id','DESC')->get();
        return view('resume',compact('exp','edu'));
    }
}
