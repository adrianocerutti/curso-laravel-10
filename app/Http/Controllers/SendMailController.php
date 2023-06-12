<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function lead(Request $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;

        $data = [
            'name' => $name,
            'tel' => $tel,
            'email' => $email
        ];

        Mail::to('adrianocerutti@gmail.com')->send(new Sendmail($data));
        return redirect()->route('home');
    }

    public function contato(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];

        Mail::to('adrianocerutti@gmail.com')->send(new Contato($data));
        return redirect()->route('contato');
    }
}
