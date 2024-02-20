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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <button class="btn btn-danger"> Excluir </button>
                        <button class="btn btn-success"> Editar </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
