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
            'image'=>'required|image',
        ]);
//        return $request;
//        die;

        $image =$request->file('image');
        $image_ext= $image->getClientOriginalExtension();
        $image_new= uniqid().'.'.$image_ext;
        $image->move(public_path('/img'),$image_new);
        $allbio = Bio::all();
        $bio = $allbio->count();
        //Deleteing data if Found
        if($bio>0){
          $allbio->each->truncate();
          $allbio->each->create([
              'name'        =>$request->name,
              'job_title'   =>$request->job,
              'desc'        =>$request->desc,
              'image'       => $image_new

          ]);
        }
        else {
       Bio::create([
           'name'          =>$request->name,
           'job_title'     =>$request->job,
           'desc'          =>$request->desc,
           'image'         => $image_new
       ]);
                }
        return response('Bio updated successfully');
    }
}
