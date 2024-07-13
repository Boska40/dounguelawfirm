<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Mail\OrderShipped2;
use Illuminate\Support\Facades\Mail;

class PersonController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:people,email',
            'phone' => 'required|unique:people,phone'
        ]);

        // dd($request->all());

        $person = Person::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        Mail::to('stephaneboska@gmail.com')->send(new OrderShipped2($person)); 

        notifer()->success('Formulaire envoyé avec succès !');
        return back()->with('success', 'Envoyé avec succès!');
    }
}
