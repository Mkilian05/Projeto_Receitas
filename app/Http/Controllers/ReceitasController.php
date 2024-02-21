<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceitaRequest;
use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitasController extends Controller
{
    // Funções de visualização de páginas
    public function viewPage(){
        return view('add_receitas');
    }

    public function viewAdmin(){
        $receitas = Receita::all();
        return view('admin_receitas', ['receitas'=>$receitas]);
    }

    // Funções de gerência
    public function store(ReceitaRequest $request){
        Receita::create($request->all());
        return redirect()->route('receitas.addrec')->with('success', 'Receita Adicionada com Sucesso!');
    }
}
