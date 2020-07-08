<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16/12/2019
 * Time: 22:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabela extends Model
{

    protected $table = "TDD_Tabela";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID',
        'IDModulo',
        'Situacao',
        'TipoTabela',
        'Nome',
        'DescricaoPortugues',
        'DescricaoIngles',
        'DescricaoEspanhol',
        'ModoAcesso',
        'DescricaoChavePrimaria',
        'TabelaInterna',
        'SequenciaCopia',
        'TabelaSincronizada',
        'NomeColunaOrdenar',
        'Usuario',
        'IDUsuario',
        'DataCadastro'
    ];

    /**
     * Campos da Tabela
     */
    public function campos()
    {
        return $this->hasMany(Campo::class, 'IDTabela', 'ID');
    }
}
