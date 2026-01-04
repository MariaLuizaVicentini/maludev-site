@extends('layout')

@section('pagina-inicial') 
    @include('inicio.index')
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
