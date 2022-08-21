<?php

namespace App\Http\Controllers;

use App\Models\SocailNetwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SocailNetworkController extends Controller
{
    public function index(){

        $social=SocailNetwork::all();
        return view('panel/social.index',compact('social'));
    }
    public function show(){

        return view('panel/social.add');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'link'=>'required|url',
        ]);
        SocailNetwork::create([
            'social_name'=>$request->name,
            'social_link'=>$request->link
        ]);
        return redirect()->route('social.index');
    }
    public function edit($id){
        $updated=SocailNetwork::FindOrFail($id);
        return view('panel/social.edit',compact('updated'));

    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required|min:3',
            'link'=>'required|url',
        ]);
        $up=SocailNetwork::findOrFail($id);
        $up->update([
            'social_name'=>$request->name,
            'social_link'=>$request->link
        ]);
        return redirect()->route('social.index');
    }
    public function delete($id){
        $del=SocailNetwork::findOrFail($id);
        $del->delete();
        return redirect()->route('social.index');


    }
}
