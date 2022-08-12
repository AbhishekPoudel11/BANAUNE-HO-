<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function addContact(){
        return view('index.contact');
    }
    function saveContact(Request $request){
        
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return back()->with('contact_sent','Your message has been sent successfully!!');
    }
    public function index(){
        $contacts = DB::table('contacts')->get();
        return view('index.contact', compact('contacts'));
    }
}