@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-5">

        {{--  Imagem/Banner  --}}
        <img src="..." class="img-fluid" alt="...">

        {{--  Grupo de Cards  --}}
        <div class="card-group">
            {{--  Primeiro Card  --}}
            <div class="card text-center">
                <img src="{{ asset('images/Receitas_Salgadas.png') }}" class="card-img-top" width="250" height="250"
                    alt="Card Image 1">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Para visualizar <strong>SOMENTE</strong> Receitas Salgadas clique no botão abaixo!
                    </p>
                    <a href="#" class="btn btn-outline-info btn-lg">Vamos lá!</a>
                </div>
            </div>

            {{--  Segundo Card  --}}
            <div class="card text-center">
                <img src="{{ asset('images/Receitas_Doces.png') }}" class="card-img-top" width="250" height="250"
                    alt="Card Image 2">
                <div class="card-body">
                    <h5 class="card-title ">Receitas Doces</h5>
                    <p class="card-text ">Para visualizar <strong>SOMENTE</strong> Receitas Doces clique no botão abaixo!
                    </p>
                    <a href="#" class="btn btn-outline-info btn-lg">Vamos lá!</a>
                </div>
            </div>
        </div>
        {{--  Fim Grupo de Cards  --}}
    </div>
    </div>
@endsection
