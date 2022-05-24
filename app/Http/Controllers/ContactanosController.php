<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){

    }

    public function store(){
        $correo = new ContactanosMailable;
        Mail::to('josefernandorevelo@gmail.com')->send($correo);
    
        return "Mensaje enviado";
        
    }
}
