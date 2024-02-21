<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceitaRequest;
use App\Models\Receita;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReceitasController extends Controller
{
    // Funções de visualização de páginas
    public function viewPage()
    {
        return view('add_receitas');
    }

    public function viewAdmin()
    {
        $receitas = Receita::all();
        return view('admin_receitas', ['receitas' => $receitas]);
    }

    // Funções de gerência
    public function store(ReceitaRequest $request)
    {
        Receita::create($request->all());
        return redirect()->route('receitas.addrec')->with('success', 'Receita Adicionada com Sucesso!');
    }

    public function delete(int $id)
    {
        try {
            Receita::where('id', $id)->delete();
            return redirect()->route('receitas.admrec')->with('success', 'Receita removida com êxito!');
        } catch (Exception $e) {
            Log::error('Erro ao remover Receita. Error =>' . $e->getMessage());
            return redirect()->route('receitas.admrec')->with('danger', 'Houve um erro ao remover a Receita!');
        }
    }

    public function viewEditRec($id){
        $receitas = Receita::where('id', $id)->first();
        // dd($receitas);
        if(!empty($receitas)){
            return view('editar_receitas', ['receitas'=>$receitas]);
        }else{
            return redirect()->route('receitas.admrec');
        }
    }

    public function updateRec(ReceitaRequest $request, $id){
        $data = [
            'nome' => $request->nome,
            'ingredientes' => $request->ingredientes,
            'categoria' => $request->categoria,
            'modo_de_preparo' => $request->modo_de_preparo,
            'slug' => $request->slug,
            'img_card' => $request->img_card,
            'img_receita' => $request->img_receita,
        ];

        Receita::where('id', $id)->update($data);
        session()->flash('succes', 'Receita atualizada com êxito!');
        return redirect()->route('receitas.admrec');
    }

}
