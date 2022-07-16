@extends('layouts.main')

@section('title', 'Infofis Tecnologia')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma aula</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="aulas-container" Class="col-md-12">
    <h2>Próximas Aulas</h2>
    <p class="subtitle">Veja as aulas dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($aulas as $aulas)
        <div class="card col-md-3">
            <img src="/img/aulas/{{ $aulas->image }}" alt="{{ $aulas->title}}">
            <div class="card-body">
            <p class="card-date">20/02/2020</p>
            <h5 class="card-title">{{ $aulas->title}}</h5>
            <p class="card-participants">X Participantes</p>
            <a href="/aulas/{{ $aulas->id}}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
