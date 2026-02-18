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
    </section>
@endsection
