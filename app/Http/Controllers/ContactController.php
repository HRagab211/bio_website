<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');

    }

    public function store(Request $request)
    {
        $request->validate([
            'Name'  =>'required|string',
            'email' =>'required|email',
            'phone' =>'required|numeric|max:13',
            'content'=>'required'
        ]);

        $contact = Contact::create([
            'Name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->desc
        ]);
        return redirect()->route('success');
    }

    public function viewallmessages()
    {
        $messages=Contact::all();
        return view('panel/contact/all_messages',compact('messages'));
    }

    public function viewmessage($id){
        $messages=Contact::findOrFail($id);
        return view('panel/contact/message',compact('messages'));
    }
    public function destroy($id){
        $mess=Contact::FindOrFail($id);
        $mess->delete();
        return redirect()->route('messages.all');
    }
}



