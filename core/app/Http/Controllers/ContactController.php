<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function pageContact() {
        
        return view('contact/pageContact');    
    }


    public function postContact(Request $request) {
        
        if ($request -> isMethod('post' )) {

            $validator = Validator::make($request -> all(), [
                'nomContact' => 'required',
                'mailContact' => 'required|email',
                'messageContact' => 'required|min:1|max:300',
            ]);

            // si la validation échoue
            if ($validator->fails()) {
                Session::flash('error', "Attention le formulaire contient des erreurs");
                return redirect('contact/pageContact')->withErrors($validator)->withInput();
                
            } 
            // sinon on envoi le mail
            else {
                
                Mail::send('contact.mailContact', array(
                    
                    'name' => $request->get('nomContact'),
                    'email' => $request->get('mailContact'),
                    'contenu' => $request->get('messageContact')

                ), function ($message) {
                    
                    $message->to('projetlaraveltest@gmail.com', 'Site admin')
                    ->subject('Formulaire Contact'); 
                });

                Session::flash('success', "Le message à bien été envoyé");
                return redirect('/index');
            }

        }
    }

} // Fin de la classe
