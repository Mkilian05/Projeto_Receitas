<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceitaRequest;
use App\Models\Receita;
use Illuminate\Http\Request;

class AddReceitasController extends Controller
{
    public function viewPage(){
        return view('add_receitas');
    }

    public function store(ReceitaRequest $request){
        Receita::create($request->all());
        return redirect()->route('receitas.addrec')->with('success', 'Receita Adicionada com Sucesso!');
    }
}
