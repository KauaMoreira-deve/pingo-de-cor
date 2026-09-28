<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publicacao;

class PublicacaoController extends Controller
{
public function index()
{
$listarPublicacoes = Publicacao::all();

return view('admin.publicacoes.index', compact('listarPublicacoes'));
}
}