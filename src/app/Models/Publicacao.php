<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Publicacao extends Model{
      protected $table = 'tbl_publicacoes';
    protected $primaryKey = 'id_publicacoes';

    public $timestamps = false;

    protected $fillable = [
        'titulo_publicacoes',
        'imagem_publicacoes',
        'descrcao_publicacoes',
        'link_publicacoes',
        'data_publicacoes',


    ];

}