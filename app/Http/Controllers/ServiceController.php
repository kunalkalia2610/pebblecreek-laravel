<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    
    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'country'=> $request->input('country'),
            'comment' => $request->input('comment')
        ];
        Mail::to('rupamranjan007@gmail.com')
            ->send(new \App\Mail\ContactusMail($details));
        return redirect('/');
    }
}
