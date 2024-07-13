<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CandidateController extends Controller {

    public function save(Request $request){
        $request->validate([
            'noms' => 'required',
            'e_mail' => 'required|email|unique:people,email',
            'telephone' => 'required|unique:people,phone',
            'niveau' => 'required',
            'adresse' => 'required',
            'cv' => 'required|file'
        ]);

        $cv = '';
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store('cv', 'public');
        }

        $candidate = Candidate::create([
            'noms' => $request->noms,
            'e_mail' => $request->e_mail,
            'telephone' => $request->telephone,
            'niveau' => $request->niveau,
            'adresse' => $request->adresse,
            'cv' => $cv
        ]);

        Mail::to('stephaneboska@gmail.com')->send(new OrderShipped($candidate));
        
        notifer()->success('Candidature soumise');
        return back()->with('success', 'Envoyé avec succès!');
    }
}