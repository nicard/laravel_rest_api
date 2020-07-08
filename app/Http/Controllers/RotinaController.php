<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16/12/2019
 * Time: 21:49
 */

namespace App\Http\Controllers;

use App\Rotina;
use Illuminate\Http\Request;

class RotinaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($idRotina)
    {
        $rotinas = Rotina::with('dicionarios')
            ->with('dicionarios.tabela')
            ->with('dicionarios.tabela.campos')
            ->find($idRotina);

        /*$aReturnData = [
            'ID' => $rotinas->ID,
            'DescricaoPortugues' => $rotinas->DescricaoPortugues
        ];*/
        return $rotinas;
    }


}
