@extends('layout')

@section('meu-contato')
<section id="contato" class="py-5" style="background-color: #0a0a0a;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center fw-bold text-white mb-1">
                    Entre em Contato
                </h2>

                <div class="mx-auto mb-5"
                     style="width: 60px; height: 3px; background-color: #00e676;">
                </div>

                <form action="{{ route('enviar-mensagem') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input
                            name="nome"
                            type="text"
                            class="form-control border-0 py-3"
                            placeholder="Seu Nome"
                            style="background-color: #141414; color: #fff;"
                            value="{{ old('nome') }}"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <textarea
                            name="mensagem"
                            class="form-control border-0 py-3"
                            rows="5"
                            placeholder="Sua Mensagem"
                            style="background-color: #141414; color: #fff;"
                            required
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn w-100 py-3 fw-semibold"
                        style="background-color: #00e676; color: #0a0a0a;"
                    >
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="py-5" style="background-color: #0a0a0a;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="text-white">
                    Sobre este portfólio
                </h5>

                <p class="text-secondary">
                    Desenvolvido com Laravel e Bootstrap 5.
                </p>

                <p class="text-secondary">
                    &copy; {{ date('Y') }}. Todos os direitos reservados.
                </p>
            </div>

            <div class="col-md-4">
                <h5 class="text-white">
                    Links Rápidos
                </h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#inicio">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="#projetos">
                            Projetos
                        </a>
                    </li>

                    <li>
                        <a href="#habilidades">
                            Habilidades
                        </a>
                    </li>

                    <li>
                        <a href="#sobre">
                            Sobre
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5 class="text-white">
                    Redes Sociais
                </h5>

                <div class="d-flex gap-3">
                    <a href="https://github.com/MariaLuizaVicentini"
                       class="text-light"
                       target="_blank">
                        <i class="fab fa-github fa-2x"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/malu-vicentini-5b8181201"
                       class="text-light"
                       target="_blank">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>

                <hr>
                    <p class="text-secondary mb-0">
                        vicentinimalu1@gmail.com
                    </p>
            </div>
        </div>
    </div>
</footer>
@endsection
