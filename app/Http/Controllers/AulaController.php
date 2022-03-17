<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index(){

        $nome = "Paulo Bala";
        $idade = 38;
        $profissao = "Programador";
        $arr = [1, 2, 3, 4, 5];

        return view('welcome',

        ['nome' => $nome,
        'idade' => $idade,
        'profissao' => $profissao,
        'arr' => $arr
    ]);
    }

    public function create(){
        return view ('aula.create');

    }

}



