@extends('layouts.main')

@section('title', '$aulas->title')

@section('content')

    <div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="img-container" class="col-md-6">
            <img src="/img/aulas/{{$aulas->image}}" alt="{{$aulas->title}}"  class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$aulas->title}}</h1>
            <p class="aulas-city">
                <ion-icon name="location-outline"></ion-icon> {{$aulas->city}} - {{$aulas->district}}
            </p>
            <p class="aulas-participantes">
                <ion-icon name="people-outline"> </ion-icon> {{count($aulas->users)}} Participantes
            </p>
            <p class="event-ower">
                <ion-icon name="star-outline"> </ion-icon> Criado por: {{ $aulasOwner['name'] }}
            </p>
            @if(!$hasUserJoin)
            <form action="{{route('event.join',$aula->id)}}" method="post">
                @csrf

                <a href="{{route('aulas.join',$aula->id)}}"
                     id="aulas-submit"
                     class="btn btn-primary"
                     onclick="aulas.preventDefault();
                     this.closest('form').submit();">
                      Confirmar presença </a>
            </form>
            @else
            <form action="{{route('aulas.leave', $aula->id)}}" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon> Sair do Evento.
                        </button>
                    </form>
            @endif
      <h3>A Aula conta com: </h3>
            <ul id="items-list">
                @foreach($aulas->items as $item)
                    <li><ion-icon name="play-outline"></ion-icon> <span>{{$item}}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre a Aula</h3>
            <p class="aulas-description"> {{$aulas->description}}</p>
        </div>
    </div>
</div>

@endsection
