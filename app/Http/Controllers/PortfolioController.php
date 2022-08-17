<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $port = Portfolio::all();

        return view('panel/portfolio/index',compact('port'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel/portfolio/add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'  =>'required|min:3',
        'image' =>'required|image|mimes:jpeg,jpg,png',
        'link'  =>'required|url',
        ]);

$image              = $request->file('image');
$extension          =$image->getClientOriginalExtension();
$image_new_name     =uniqid().'.'.$extension;
$image->move(public_path('uploads/portfolio_images'),$image_new_name);

$port=Portfolio::create([
    'project_name'  =>$request->name,

    'image'         =>$image_new_name,

    'project_link'  =>$request->link

]);

return redirect()->route('myportfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $port=Portfolio::where('id',$id)->first();
        return view('panel/portfolio/port_item',compact('port'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $port=Portfolio::where("id",$id)->first();
        return view('panel/portfolio/edit',compact('port'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
//    {        $request->validate([
//        'name'  =>'required|min:3',
//        'image' =>'nullable|image|mimes:jpeg,jpg,png',
//        'link'  =>'required|url',
//    ]);
//        $port=Portfolio::FindOrFail($id);
//        $imagename=$port->image;
//
//        if ($request->hasFile('image'))
//        {
//            if ($imagename!=null)
//            {
//                unlink(public_path('uploads/portfolio_images/'.$imagename));
//                $image             = $request->file('image');
//                $extension         =$image->getClientOriginalExtension();
//                $imagename         =uniqid().'.'.$extension;
//                $image->move(public_path('uploads/portfolio_images'),$imagename);
//            }
//
//        }
//        $port->update([
//            'project_name'  =>$request->name,
//
//            'image'         =>$imagename,
//
//            'project_link'  =>$request->link
//        ]);
//        return redirect()->route('myportfolio.index');
        return('Done');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Done;
    }
}
