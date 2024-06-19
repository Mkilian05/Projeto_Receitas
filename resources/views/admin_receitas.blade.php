@extends('layouts.main')

@section('content')

<div class="container my-5">
    <table class="table table-secondary table-smgit table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">*</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                {{--  <th scope="col">Ingredientes</th>  --}}
                <th scope="col">Gerenciamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receitas as $receita)
            <tr>
                <th scope="row">{{ $receita->id }}</th>
                <td>{{ $receita->nome }}</td>
                <td>{{ $receita->categoria }}</td>
                {{--  <td>{{ $receita->ingredientes }}</td>  --}}
                <td>
                    <button class="btn btn-danger remover" id="{{$receita->id}}"> Excluir </button>
                    <a href="{{  route('receitas.view-edit-rec', $receita->id  )  }}" class="btn btn-success"> Editar </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('pageScripts')
    <script>
        $(document).ready(function(){
            $('.remover').click('btn', function(event){
                event.preventDefault();
                id = $(this).attr('id');

                showConfirm('Tem certeza que deseja excluuir esse item ?')
                .then((result) => {
                return ( result.dismiss === Swal.DismissReason.cancel ? false : removeItem(id) );
                });
            })

            function removeItem(id){
                $.ajax({
                    type: 'post',
                    url: "{{ route('receitas.del-rec')}}"+"/"+id,
                    data : "",
                    dataType : 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (objs) {
                        showMessage('Item removido com sucesso.', 'success', window.location);
                    },
                    error: (error) => {
                        console.log(JSON.stringify(error));
                        showMessage('OCORREU UM ERRO AO GERAR O NOTFIS', 'error');
                    },
                    complete: () => $('#pageloader').fadeOut()
                });
            }
        })
    </script>
@endsection
