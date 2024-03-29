@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Editar Receita</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{  route('receitas.update-edit-rec', $receitas->id)  }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <input type="hidden" name="id" value="{{  $receitas->id  }}">
                                <label class="form-label">Nome da Receita:</label>
                                <input type="text" name="nome" class="form-control" value="{{  $receitas->nome  }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ingredientes:</label>
                                <textarea style="height: 125px !important" name="ingredientes" class="form-control" >{{  $receitas->ingredientes  }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Categoria:</label>
                                <input type="text" name="categoria" class="form-control" value="{{  $receitas->categoria  }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Modo de Preparo:</label>
                                <textarea style="height: 150px !important" name="modo_de_preparo" class="form-control">{{  $receitas->modo_de_preparo  }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Slug:</label>
                                    <input type="text" name="slug" class="form-control" value="{{  $receitas->slug  }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome Imagem do Card:</label>
                                    <input type="text" name="img_card" class="form-control" value="{{  $receitas->img_card  }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Nome Imagem Receita:</label>
                                    <input type="text" name="img_receita" class="form-control" value="{{  $receitas->img_receita  }}">
                                </div>
                            </div>
                            <button class="btn btn-outline-success col-12 rounded">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
