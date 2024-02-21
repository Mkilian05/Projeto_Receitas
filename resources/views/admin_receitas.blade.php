@extends('layouts.main')

@section('content')
<div class="container my-5">
    <table class="table table-secondary table-smgit table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">*</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ingredientes</th>
                <th scope="col">Gerenciamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receitas as $receita)
                <tr>
                    <th scope="row">{{  $receita->id }}</th>
                    <td>{{ $receita->nome }}</td>
                    <td>{{ $receita->categoria }}</td>
                    <td>{{ $receita->ingredientes }}</td>
                    <td>
                        <a href="{{  route('receitas.del-rec', $receita->id)  }}" class="btn btn-danger"> Excluir </a>
                        <a href="{{  route('receitas.view-edit-rec', $receita->id  )}}" class="btn btn-success"> Editar </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
