<?php

namespace Sagacious\Contactform\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sagacious\Contactform\Mail\InquiryEmail;
use Sagacious\Contactform\Models\Contact;

class ContactFormController extends BaseController
{
    public function create(){
        return view('contactform::create');
    }

    public function store(Request $request){
  
        $validated = $request->validate([
            'name'=>'required|max:100',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        Contact::create($validated);

        $admmin_email = \config('contactform.admin_email');
        if($admmin_email===null || $admmin_email===''){
            dd(123);
        }else{
            \Mail::to($admmin_email)->send(new InquiryEmail($validated));
        }
    
        return back()->with('success','Messge submitted successfully');
    }

    
}
