@extends('layout')

@section('meu-contato')
    <section id="contato" class="bg-dark text-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Entre em Contato</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="{{ route('enviar-mensagem') }}"  method="POST">
                        @csrf
                        <div class="mb-3">
                            <input name="nome" type="text" class="form-control" placeholder="Seu Nome" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="mensagem" class="form-control" rows="5" placeholder="Sua Mensagem" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

        <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5>Sobre este portfólio</h5>
                    <p class="text-secondary">Desenvolvido com Bootstrap 5.</p>
                    <p class="text-secondary">&copy; 2025 Todos os direitos reservados.</p>
                </div>
                <div class="col-md-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Início</a></li>
                        <li><a href="/projetos" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Projetos</a></li>
                        <li><a href="/habilidades" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Habilidades</a></li>
                        <li><a href="/sobre" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Sobre</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <div class="d-flex gap-3">
                        <a href="https://github.com/MariaLuizaVicentini" class="text-light" target="_blank"><i class="fab fa-github fa-2x" id="icone-footer"></i></a>
                        <a href="https://www.linkedin.com/in/malu-vicentini-5b8181201" class="text-light" target="_blank"><i class="fab fa-linkedin fa-2x" id="icone-footer"></i></a>
                    </div>
                    <hr>
                    <p class="mb-0">vicentinimalu1@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
@endsection