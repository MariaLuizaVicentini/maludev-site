@extends('layout')

@section('footer')
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

                    <li>
                        <a 
                            href="{{ asset('curriculo/CVdev02.26.pdf') }}" 
                            onclick="window.open(this.href, '_blank'); return false;"
                            download="Malu_Vicentini_CV.pdf">
                            Baixar CV
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5 class="text-white">
                    Redes Sociais
                </h5>

                <div class="d-flex gap-3">
                    <a href="https://github.com/MariaLuizaVicentini" class="text-light" target="_blank">
                        <i class="fab fa-github fa-2x"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/malu-vicentini-5b8181201" class="text-light" target="_blank">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>

                <hr>
                <p class="text-secondary mb-0">
                    vicentinimalu1@gmail.com
                </p>
            </div>
        </div>
</footer>
@endsection