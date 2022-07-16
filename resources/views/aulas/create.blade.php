@extends('layouts.main')

@section('title', 'Criar Aula')

@section('content')

<div id="aula-create-container" class="col-md-6 offset-md-3">
<h1>Crie sua aula</h1>
<form action="/aulas" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Imagem da Aula:</label>
        <input type="file" class="from-control-file" id="image" name="image">
 </div>
    <div class="form-group">
        <label for="title">Aula:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome da aula">
 </div>

     <div class="form-group">
        <label for="title">cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local da aula">
 </div>

     <div class="form-group">
        <label for="title">Evento Pago?:</label>
        <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
        </select>

 </div>

     <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que você vai aprender nesta aula"></textarea>
 </div>
 <input type="submit" class="btn btn-primary" value="Criar aula">
 </form>
 </div>

@endsection

