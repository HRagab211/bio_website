<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
   public function show(){

       $experiences = Experience::all();
       return view('panel/experience/index',compact('experiences'));
   }


   public function add_experience_show(){
       return view('panel/experience/add');
   }


   public function store(Request $request){
       $validation = $request->validate([
        'title'=>'required|min:3|max:50',
        'period'=>'required|min:3|max:50',
        'desc'=>'required|min:10',
       ]);
     Experience::create([
        'job_title'=>$request->title,
        'Experience_period'=>$request->period,
        'job_description'=>$request->desc
    ]);
return redirect()->route('exp.index');
   }

   public function item($id){
       $exp = Experience::where('id',$id)->first();
       return view('panel/experience/exp_item',compact('exp'));
   }
    public function destroy($id){
        $exp = Experience::where('id',$id)->delete();
return redirect()->route('exp.index');
    }

    public function edit($id){
       $exp = Experience::where('id',$id)->first();
       return view('panel/experience/edit',compact('exp'));
    }
    public function update(Request $request,$id){
        $validation = $request->validate([
            'title'=>'required|min:3|max:50',
            'period'=>'required|min:3|max:50',
            'desc'=>'required|min:10',
        ]);
  $exp = Experience::FindOrFail($id);
  $exp->update([
      'job_title'=>$request->title,
      'Experience_period'=>$request->period,
      'job_description'=>$request->desc
  ]);
        return redirect()->route('exp.index');

   }
}
