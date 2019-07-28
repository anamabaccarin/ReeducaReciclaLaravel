<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MsgContactMailable;

class ContatoController extends Controller
{
    function index (){
        return view('contato');
    }

    function sendMail(Request $request) {
        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        $msgRetorno = null;
        try {
            $objMailTo = Mail::to('reeduca@reeduca.com');
            $mailable = new MsgContactMailable($name, $email, $message);
            $objMailTo->send($mailable);
            $msgRetorno ="Email enviado com sucesso, obrigado!";

        } catch (\Exception $e) {
            $msgRetorno = "Ocorreu um erro ao tentar enviar sua mensagem. Por favor, tente novamente mais tarde";
        }
        return view('contato', ['msg' => $msgRetorno]);
    }
}
