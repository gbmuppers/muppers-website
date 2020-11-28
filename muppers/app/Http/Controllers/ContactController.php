<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailRecibido;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function store()
    { 
        $msj = request() -> validate([
            'name-' => 'required',
            'phone' => 'required',
            'email' => 'required|email',            
            'message' => 'required',
        ]);

        //Enviar email
        Mail::to('contacto.muppers@gmail.com')->queue(new MailRecibido($msj));
        return redirect()->back();
    }
}
