<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MsgContactMailable;

class ContatoController extends Controller
{
    function index (){
        return view('contato', ['msg'=>""]);
    }

    function sendMail(Request $request) {
        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        Mail::to('reeduca@reeduca.com')->send(new MsgContactMailable($name, $email, $message));

        return view('contato', ['msg'=>"Email enviado com sucesso, obrigado!"]);
    }
}
