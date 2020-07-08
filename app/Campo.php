<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16/12/2019
 * Time: 22:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{

    protected $table = "TDD_Campo";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID',
        'IDTabela',
        'Situacao',
        'Ordem',
        'CampoNome',
        'CampoIDTipoCampo',
        'CampoTamanho',
        'CampoCasasDecimais',
        'ChavePrimaria',
        'Identidade',
        'CampoFormato',
        'CampoContexto',
        'CampoPropriedade',
        'InformacoesTituloPortugues',
        'InformacoesTituloEspanhol',
        'InformacoesTituloIngles',
        'InformacoesDescricaoPortugues',
        'InformacoesDescricaoEspanhol',
        'InformacoesDescricaoIngles',
        'OpcoesListaPortugues',
        'OpcoesListaEspanhol',
        'OpcoesListaIngles',
        'OpcoesInicializadorPadrao',
        'OpcoesInicializadorBrowser',
        'OpcoesModoEdicao',
        'OpcoesConsultaPadrao',
        'OpcoesCorretor',
        'OpcoesPSearch',
        'ValidacoesValidaUsuario',
        'ValidacoesValidaSistema',
        'ValidacoesNivel',
        'UsoObrigatorio',
        'UsoUsado',
        'UsoBrowse',
        'IDPasta',
        'Mostrar_Na_Grid',
        'Mostrar_Na_Detalhe',
        'Consultar_Search',
        'Consultar_Campo_Separado',
        'DataCadastro',
        'Usuario',
        'ComboDinamica',
        'IDUsuario',
        'Real_Virtual',
        'CampoChave',
        'CampoIdEstrangeiro',
        'CampoTamanhoDetalhe',
        'CampoTamanhoGrid',
        'CampoTextAreaRow',
        'IDComponente'
    ];

}
