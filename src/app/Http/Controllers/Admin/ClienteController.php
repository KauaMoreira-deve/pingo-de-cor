<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente; // Se estiver a usar o Model Cliente
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Se estiver a usar DB::table

class ClienteController extends Controller
{
    public function index()
    {
        // Utilizando o Model Cliente
        $listarCliente = Cliente::all();

        return view('admin.cliente.index', compact('listarCliente'));
    }
}