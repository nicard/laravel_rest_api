<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotina extends Model
{

    protected $table = "TSI_Rotina";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID',
        'Ordem',
        'IDSubModulo',
        'DescricaoPortugues',
        'DescricaoIngles',
        'DescricaoEspanhol',
        'ImagemURL',
        'Situacao',
        'AjudaPortugues',
        'AjudaIngles',
        'AjudaEspanhol',
        'FormularioURL',
        'Tipo',
        'DataCadastro',
        'Usuario',
        'IDRelatorio',
        'IDRotinaRelatorio',
        'IDOperador',
        'ComoAbrirRotina',
        'IDRelatorioLista',
        'IdUsuario',
        'RelatorioEtiquetaID'
    ];

    /**
     * Dicionario de Dados
     */
    public function dicionarios()
    {
        return $this->hasMany(RotinaDicionario::class, 'IDRotina', 'ID');
    }
}
