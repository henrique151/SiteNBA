<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return view('site.contato');
    }

    public function enviarContato(Request $request)
    {
        return view('site.dump', ['titulo' => 'Contato(teste)']);
    }
}