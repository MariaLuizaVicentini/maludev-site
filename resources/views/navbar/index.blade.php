@extends('layout')

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#inicio">Seja Bem-vindo(a)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#habilidades">Habilidades</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('curriculo/CVdev02.26.pdf') }}" target="_blank"
                            download="Malu_Vicentini_CV.pdf">Baixar CV</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection
