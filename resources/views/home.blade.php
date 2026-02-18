@extends('layout')

@section('navbar') 
    @include('navbar.index')
@endsection

@section('pagina-inicial') 
    @include('pagina-inicial.index')
@endsection

@section('meus-projetos') 
    @include('projetos.index')
@endsection

@section('minhas-habilidades') 
    @include('habilidades.index')
@endsection

@section('sobre-mim') 
    @include('sobre.index')
@endsection

@section('meu-contato') 
    @include('contato.index')
@endsection

@section('chat') 
    @include('chat.index')
@endsection
