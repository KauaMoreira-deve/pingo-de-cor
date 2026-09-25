<?php

use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProjetosController;
use App\Http\Controllers\Site\PublicacoesController;
use App\Http\Controllers\Site\SobreController;

use Illuminate\Support\Facades\Route;

// area administrativa
use App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\BannerController;
use \App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\ContatoController as AdminContatoController;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/projetos', [ProjetosController::class, 'index'])->name('projetos.index');
Route::get('/projetos/{projeto}', [ProjetosController::class, 'show'])->name('projetos.show');
Route::get('/publicacoes', [PublicacoesController::class, 'publicacoes'])->name('publicacoes');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

// Os endereços antigos continuam funcionando como redirecionamentos.
Route::redirect('/index.html', '/');
Route::redirect('/sobre.html', '/sobre');
Route::redirect('/+projetos.html', '/projetos');
Route::redirect('/publicacoes.html', '/publicacoes');
Route::redirect('/contato.html', '/contato');
Route::redirect('/quarto-olivia.html', '/projetos/quarto-olivia');
Route::redirect('/quarto-matteo.html', '/projetos/quarto-matteo');
Route::redirect('/quarto-lucca.html', '/projetos/quarto-lucca');
Route::redirect('/quarto-julia-isabella.html', '/projetos/quarto-julia-isabella');
Route::redirect('/quarto-joaquim.html', '/projetos/quarto-joaquim');
Route::redirect('/quarto-dan-ava.html', '/projetos/quarto-dan-ava');
Route::redirect('/quarto-catarina.html', '/projetos/quarto-catarina');
Route::redirect('/quarto-benjamin.html', '/projetos/quarto-benjamin');
Route::redirect('/quarto-alice-catarina.html', '/projetos/quarto-alice-catarina');
Route::redirect('/brinquedoteca.html', '/projetos/brinquedoteca');

// Painel administrativo demonstrativo (dados estáticos).
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/banners', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/contato', [AdminContatoController::class, 'index'])->name('contato.index');
    
});
