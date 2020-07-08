<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotinaDicionario extends Model
{

    protected $table = "TSI_RotinaDicionario";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID',
        'IDRotina',
        'Ordem',
        'Descricao',
        'Tipo',
        'IDTabela',
        'IDCampoRelacionamento',
        'DataCadastro',
        'IDUsuario'
    ];

    /**
     * Tabela do Banco
     */
    public function tabela()
    {
        return $this->belongsTo(Tabela::class, 'IDTabela', 'ID');
    }
}
