<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use Illuminate\Http\Request;

class BioController extends Controller
{

    public function index(){
      return view('panel/bio/index');
    }
    public function update(Request $request){
        $validation= $request->validate([
            'name'=>'required',
            'job'=>'required',
            'desc'=>'required',
        ]);
//        return $request;
//        die;
        $allbio = Bio::all();
        $bio = $allbio->count();
        if($bio>0){
          $allbio->each->truncate();
          $allbio->each->create([
              'name'=>$request->name,
              'job_title'=>$request->job,
              'desc'=>$request->desc,
              'social_net'=>$request->sname,
              'social_link'=>$request->slink,
              'image'=>$request->image

          ]);
        }
        else {
       Bio::create([
           'name'          =>$request->name,
           'job_title'     =>$request->job,
           'desc'          =>$request->desc,
           'social_net'    =>$request->sname,
           'social_link'   =>$request->slink,
           'image'         =>$request->image

       ]);
                }
        return response('Bio updated successfully');
    }
}
