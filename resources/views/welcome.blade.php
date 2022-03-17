@extends('layouts.main')

@section('title', 'Infofis Tecnologia')

@section('content')

        <h1>Infofis Cursos</h1>
        <img src="/img/banner.png" alt="Banner">
        @if (10 > 5)
            <p>A condição é true</p>
        @endif

        <p> {{ $nome }} </p>

        @if($nome == "Terra")
            <p>O nome é Terra</p>

        @elseif($nome == "Paulo Bala")
            <p>O nome é {{ $nome}} e ele tem {{$idade}} anos, e trabalha como {{ $profissao }}</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        @for ($i = 0; $i < count ($arr); $i++)
            <p>{{ $arr[$i] }}</p>
        @endfor

        @endsection
