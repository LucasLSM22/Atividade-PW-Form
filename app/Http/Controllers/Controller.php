<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function quemSomos()
    {
        return view('instituicao');
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        // Validar os dados do formulário, salvar no banco de dados, etc.
        // Por enquanto, vamos apenas exibir as informações enviadas usando var_dump

        var_dump($request->all());
    }
}
