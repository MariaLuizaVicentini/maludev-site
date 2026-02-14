<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GroqService;

class GroqController extends Controller
{
    public $groq;

    public function __construct(GroqService $groq)
    {
        $this->groq = $groq;
    }

    public function chat(Request $request, GroqService $groq)
    {
        $userInput = $request->input('mensagem');

        $historico = session()->get('chat_malu', []);

        $resultado = $groq->obterRespostaIA($historico, $userInput);

        session()->put('chat_malu', $resultado['historico_atualizado']);

        return response()->json([
            'resposta' => $resultado['resposta']
        ]);
    }
}