<?php

namespace App\Http\Controllers;

use App\Rotina;
use Illuminate\Http\Request;

class IndexController extends Controller
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
    public function index()
    {
        $rotinas = Rotina::find([1,2,3,4]);
        return view('welcome', compact('rotinas', $rotinas));
    }


}
