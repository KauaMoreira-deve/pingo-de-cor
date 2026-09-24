<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProjetosController extends Controller
{
    private const GALERIAS = [
        'quarto-olivia',
        'quarto-matteo',
        'quarto-lucca',
        'quarto-julia-isabella',
        'quarto-joaquim',
        'quarto-dan-ava',
        'quarto-catarina',
        'quarto-benjamin',
        'quarto-alice-catarina',
        'brinquedoteca',
    ];

    public function index(): View
    {
        return view('site.projetos.projetos');
    }

    public function show(string $projeto): View
    {
        abort_unless(in_array($projeto, self::GALERIAS, true), 404);

        return view('site.projetos.galerias.' . $projeto);
    }
}
