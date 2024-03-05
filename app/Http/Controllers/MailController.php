<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvioEmail;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EmailRequest;
class MailController extends Controller
{
    public function sendMail(EmailRequest $request)
    {
        try {

            $data = [
                'email' => $request->input('email'),
                'name' => $request->input('nome'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            Mail::to('fabianobuscemi2@gmail.com')->send(new InvioEmail ($data));

            return redirect(url('/#contact'))->with('success', 'Email inviata correttamente');
        } catch (\Exception $e) {
           Log::error($e->getMessage());
           return redirect(url('/#contact'))->withInput()->withErrors(['error' => 'Si è verificato un errore durante l\'invio dell\'email. Riprova più tardi.']);
        }


    }
}
