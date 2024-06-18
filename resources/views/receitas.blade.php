@extends('layouts.main')

@section('content')

    <div class="container my-4 text-center border">
        <h2 class="py-3 text-decoration-underline">Título da receita</h2>
        <div class="row py-2">
            <div class="col-6">
                <img src="{{  asset('images/Receitas_Doces.png')  }}" alt="">
            </div>
            <div class="col-6">
                <p class="fs-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of 
                    Lorem Ipsum.
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h3 class="py-2 text-decoration-underline">
                    Modo de Preparo:
                </h3>
                <p class="fs-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
                    it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of 
                    Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>

@endsection