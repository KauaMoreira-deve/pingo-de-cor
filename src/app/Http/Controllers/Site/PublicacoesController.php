<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PublicacoesController extends Controller
{
    public function index(): View
     {
     return view('site.publicacoes.publicacoes');
     }
}
