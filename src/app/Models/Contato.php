<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados
    protected $table = 'tbl_contato';

    // Chave primária
    protected $primaryKey = 'id_contato';

    // Se a tabela não utilizar os campos padrão created_at / updated_at
    public $timestamps = false;

    // Campos permitidos para atribuição em massa
    protected $fillable = [
        'nome_contato',
        'nome_companheiro_contato',
        'nome_idade_criancas_contato',
        'email_contato',
        'telefone_contato',
        'cidade_bairro_contato',
        'profissao_contato',
        'origem_contato',
    ];
}