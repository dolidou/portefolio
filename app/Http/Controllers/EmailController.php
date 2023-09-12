<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\TextPart;

class EmailController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // // Envoi de l'e-mail
        // Mail::send([], [], function ($message) use ($data) {
        //     $message->to('destinataire@example.com') // Remplacez par l'adresse e-mail du destinataire
        //         ->subject($data['subject'])
        //         ->setBody($data['message']);
        // });

        // // Vous pouvez renvoyer une réponse JSON pour indiquer que l'e-mail a été envoyé avec succès
        // return response()->json(['message' => 'Email successfully sent!']);

    //     $email = (new Email())
    //     ->to('destinataire@example.com') // Remplacez par l'adresse e-mail du destinataire
    //     ->subject($data['subject'])
    //     ->text($data['message']); // Utilisez TextPart pour le contenu du message

    // // Envoi de l'e-mail
    //      Mail::send(new \App\Mail\SendMail($email));

    // // Vous pouvez renvoyer une réponse JSON pour indiquer que l'e-mail a été envoyé avec succès
    // return response()->json(['message' => 'Email successfully sent!']);

    $emailContent = "Subject: {$data['subject']}\n";
    $emailContent .= "Name: {$data['name']}\n";
    $emailContent .= "Email: {$data['email']}\n";
    $emailContent .= "Message: {$data['message']}";

    Mail::raw($emailContent, function ($message) use ($data) {
        $message->to('ksentini.dalila@gmail.com') // Remplacez par l'adresse e-mail du destinataire réel
            ->subject($data['subject']);
    });

    return back()->with(['message' => 'Email envoyé avec succès!']);
    }
}
