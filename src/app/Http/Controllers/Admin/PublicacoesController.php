<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publicacao;
use App\Models\Publicacoes;

class PublicacaoController extends Controller
{
    public function index()
    {
        $listarPublicacoes = Publicacoes::all();

        return view('admin.publicacoes.index', compact('listarPublicacoes'));
    }
}
