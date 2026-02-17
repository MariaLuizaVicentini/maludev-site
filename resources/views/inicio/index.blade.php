@extends('layout')

@section('pagina-inicial')
    <section id="inicio" class="min-vh-100 d-flex align-items-center" style="background-color: #0a0a0a; padding-top: 80px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold text-white mb-3">Olá, eu sou a <span style="color: #00e676;">Malu!</span></h1>
                    <p class="lead mb-4" style="color: #999; font-size: 1.2rem;">Sou QA atualmente, mas futura desenvolvedora Back-end.</p>
                    <a href="#projetos" class="btn btn-lg px-4 py-2 fw-semibold" style="background-color: #00e676; color: #0a0a0a; border: none; border-radius: 4px;">Meus Projetos</a>
                </div>
                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <div style="width: 280px; height: 280px; border-radius: 50%; border: 3px solid #00e676; margin: 0 auto; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #111, #1a1a1a); overflow: hidden;">
                        <img src="{{ asset('img/portifolio-inicio.jpg') }}" alt="logo malu" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection