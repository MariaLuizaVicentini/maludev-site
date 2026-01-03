@extends('layout')


@section('pagina-inicial')
    <section id="inicio" class="bg-primary text-light py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4">Olá, eu sou a Malu!</h1>
                    <p class="lead">Sou QA atualmente, mas futura desenvolvedora Back-end :)</p>
                    <a href="/projetos" class="btn btn-light btn-lg">Meus projetos</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img\discord.jpg" 
                        class="img-fluid rounded-circle w-75" 
                        alt="Foto de Perfil">
                </div>
            </div>
        </div>
    </section>
@endsection