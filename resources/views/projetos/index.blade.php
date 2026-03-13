@extends('layout')

@section('meus-projetos')
    <section id="projetos" class="py-5" style="background-color: #0d0d0d;">
        <div class="container py-5">
            <h2 class="text-center fw-bold text-white mb-1">Meus Projetos</h2>
            <div class="mx-auto mb-5" style="width: 60px; height: 3px; background-color: #00e676;"></div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color: #141414; border-radius: 8px;">
                        <div class="card-body p-4">
                            <div class="mb-3"
                                style="width: 40px; height: 40px; background-color: rgba(0,230,118,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-tv" style="color: #00e676; font-size: 1.2rem;"></i>
                            </div>
                            <h5 class="card-title text-white fw-bold">Controle de Séries</h5>
                            <p style="color: #777; font-size: 0.9rem;">Sistema Full-Stack em PHP com Laravel e Bootstrap.
                                Autenticação, gestão de catálogo e controle de episódios assistidos.</p>
                            <a href="https://github.com/MariaLuizaVicentini/controle-series" class="text-decoration-none fw-semibold"
                                style="color: #00e676; font-size: 0.9rem;">Visualizar repositório <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color: #141414; border-radius: 8px;">
                        <div class="card-body p-4">
                            <div class="mb-3"
                                style="width: 40px; height: 40px; background-color: rgba(0,230,118,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-search" style="color: #00e676; font-size: 1.2rem;"></i>
                            </div>
                            <h5 class="card-title text-white fw-bold">Busca Vagas LinkedIn</h5>
                            <p style="color: #777; font-size: 0.9rem;">API de Scraping para busca automatizada de vagas com
                                filtros avançados de relevância e segmentação por período.</p>
                            <a href="https://github.com/MariaLuizaVicentini/BuscaVagasLinkedin" class="text-decoration-none fw-semibold"
                                style="color: #00e676; font-size: 0.9rem;">Visualizar repositório <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color: #141414; border-radius: 8px;">
                        <div class="card-body p-4">
                            <div class="mb-3"
                                style="width: 40px; height: 40px; background-color: rgba(0,230,118,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-briefcase" style="color: #00e676; font-size: 1.2rem;"></i>
                            </div>
                            <h5 class="card-title text-white fw-bold">Portfólio Dev</h5>
                            <p style="color: #777; font-size: 0.9rem;">Aplicação web desenvolvida em Laravel para apresentação de projetos, habilidades técnicas e repositórios de desenvolvimento.</p>
                            <a href="https://github.com/MariaLuizaVicentini/MeuPortifolioDev" class="text-decoration-none fw-semibold"
                                style="color: #00e676; font-size: 0.9rem;">Visualizar repositório <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color: #141414; border-radius: 8px;">
                        <div class="card-body p-4">
                            <div class="mb-3"
                                style="width: 40px; height: 40px; background-color: rgba(0,230,118,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-currency-dollar" style="color: #00e676; font-size: 1.2rem;"></i>
                            </div>
                            <h5 class="card-title text-white fw-bold">Cotação Banco Central</h5>
                            <p style="color: #777; font-size: 0.9rem;">Aplicação em PHP que consome a API do Banco Central para consultar a cotação do dólar e realizar conversões em tempo real.</p>
                            <a href="https://github.com/MariaLuizaVicentini/CotacaoBancoCentral" class="text-decoration-none fw-semibold"
                                style="color: #00e676; font-size: 0.9rem;">Visualizar repositório <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color: #141414; border-radius: 8px;">
                        <div class="card-body p-4">
                            <div class="mb-3"
                                style="width: 40px; height: 40px; background-color: rgba(0,230,118,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-scissors" style="color: #00e676; font-size: 1.2rem;"></i>
                            </div>
                            <h5 class="card-title text-white fw-bold">Barbearia Alura</h5>
                            <p style="color: #777; font-size: 0.9rem;">Projeto responsivo de landing page desenvolvido com HTML e CSS, adaptado para diferentes dispositivos e tamanhos de tela.</p>
                            <a href="https://github.com/MariaLuizaVicentini/barbeariaAlura" class="text-decoration-none fw-semibold"
                                style="color: #00e676; font-size: 0.9rem;">Visualizar repositório <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color: #141414; border-radius: 8px;">
                        <div class="card-body p-4">
                            <div class="mb-3"
                                style="width: 40px; height: 40px; background-color: rgba(0,230,118,0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-robot" style="color: #00e676; font-size: 1.2rem;"></i>
                            </div>
                            <h5 class="card-title text-white fw-bold">Automação Web Login</h5>
                            <p style="color: #777; font-size: 0.9rem;">Script em Python utilizando Selenium para automatizar login em aplicações web e executar interações repetitivas no navegador.</p>
                            <a href="https://github.com/MariaLuizaVicentini/AutomacaoWeb-Python" class="text-decoration-none fw-semibold"
                                style="color: #00e676; font-size: 0.9rem;">Visualizar repositório <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
