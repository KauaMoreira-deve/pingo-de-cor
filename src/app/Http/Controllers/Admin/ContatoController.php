<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\View\View;

class ContatoController extends Controller
{
    public function index(): View
    {
        // Busca todos os registros de contatos
        $listarContato = Contato::all();

        // Retorna a view do painel administrativo
        return view('admin.contato.index', compact('listarContato'));
    }
}