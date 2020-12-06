<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailRecibido;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function store()
    { 
            $data = request() -> validate([
            'nombre' => 'required',            
            'empresa' => '',            
            'telefono' => 'required',            
            'correo' => 'required|email',            
            'mensaje' => 'required'
        ]);            

        //Enviar email
        Mail::to('gibran.muppers@gmail.com')->queue(new MailRecibido($data));                
        return redirect()->route('contacto');       
    }
}
