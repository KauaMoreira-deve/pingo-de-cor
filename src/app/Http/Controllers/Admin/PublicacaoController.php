<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publicacao;
use Illuminate\View\View;

class PublicacaoController extends Controller
{
public function index(): View
{
$listaPublicacoes = Publicacao::orderByDesc("id_publicacoes")->get();

//dd($listaPublicacoes);

return view('admin.publicacoes.index', compact('listaPublicacoes'));
}


}