<?php

namespace App\Http\Controllers\Dashboard;

use App\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactMessage;

class ContactUsController extends Controller
{
    public function create(){
        return  view('contactUs/contact');
    }

    public function store (Request $request){
	$this->validate($request,[
        'name' => 'required|max:40',
        'email' => 'required|email',
        'phone' => 'required|min:11|numeric',
        'message' => 'required|max:255'
        ]);

	$contactMessage = contact::create($request->all());
	return back()->with('success','Your message has been sent .. thanks for contact !');
    }
}
