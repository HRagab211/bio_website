<?php

namespace App\Http\Controllers;
//use App\Models\Education;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function show(){
        $education = Education::all();
        return view('panel/education/index',compact('education'));
    }

    public function add_education_show(){
        return view('panel/education/add');

    }
    public function store(Request $request){
        $validation = $request->validate([
            'uni'=>'required|max:50',
            'from'=>'required',
            'to'=>'required',
            'desc'=>'required',
        ]);
        $book = Education::create([
            'University'=>$request->uni,
            'From'=>$request->from,
            'To'=>$request->to,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('education.index');
    }
    public function item($id){
        $edu = Education::where('id',$id)->first();
        return view('panel/education/edu_item',compact('edu'));
    }
    public function destroy($id){
        $exp = Education::where('id',$id)->delete();
        return redirect()->route('education.index');
    }
    public function edit($id){
        $edu = Education::where('id',$id)->first();
        return view('panel/education/edit',compact('edu'));
    }
    public function update(Request $request,$id){
        $validation = $request->validate([
            'uni'=>'required|max:50',
            'from'=>'required',
            'to'=>'required',
            'desc'=>'required',
        ]);
        $book = Education::FindorFail($id)->update([
            'University'=>$request->uni,
            'From'=>$request->from,
            'To'=>$request->to,
            'desc'=>$request->desc,
        ]);
        return redirect()->route('education.index');

    }
}
