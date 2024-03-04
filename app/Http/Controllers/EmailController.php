<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Models\email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function addcomptebank()
    {
        return view('Email\add');
    }
    public function authemail(EmailRequest $request)
    {
        email::create([
            'email'=> $request->email,
        ]);
        return redirect('/admin/emails');
    }
    
    public function editcomp(email $email)
    {
        return view('Email\edit', compact('email'));
    }
    
    public function editemail(EmailRequest $request, $id)
    {
        $email = email::find($id);
        $email->email = $request->email;
        $email->save();
        
        return redirect('/admin/email');
    }
}
