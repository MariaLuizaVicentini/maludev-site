<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntreEmContatoController extends Controller
{
    public function index()
    {
        return view('contato.index');
    }

    public function enviar(Request $request) 
    {
        $dados = $request->validate([
            'nome' => 'required|string',
            'mensagem' => 'required|string'
        ]); 

        $texto = "\nOlá, meu nome é {$dados['nome']}\n" 
                . "\n{$dados['mensagem']}\n";
        
        
        $url = "https://api.whatsapp.com/send?phone=5519988406588&text=" . urlencode($texto);

        return redirect()->away($url);
    }
}
