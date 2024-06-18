@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-3">

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

        {{--  Card foreach - Todas as Receitas  --}}

        <h2 class="py-2 mt-2 text-center">Todas as Receitas</h2>
        <hr>

        <div class="row">
            <div class="col-sm-3">
                <div class="card card-home-hover text-center">
                    <img src="{{  asset('images/Receitas_Doces.png')  }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="{{ route('receitas.ver-receita') }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        {{--  Fim Card foreach - Todas as Receitas  --}}
    </div>
    </div>
@endsection
