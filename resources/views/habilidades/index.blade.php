@extends('layout')

@section('minhas-habilidades')
<section id="habilidades" class="section-dark py-5">
    <div class="container py-5">
        <h2 class="text-center section-title">
            Habilidades Técnicas
        </h2>
        <div class="divider-green mx-auto mb-5"></div>
        <div class="row g-4 justify-content-center">
            @php
            $skills = [
                ['icon' => 'fa-html5', 'name' => 'HTML5', 'color' => 'text-danger'],
                ['icon' => 'fa-css3-alt', 'name' => 'CSS3', 'color' => 'text-primary'],
                ['icon' => 'fa-js', 'name' => 'JavaScript', 'color' => 'text-warning'],
                ['icon' => 'fa-bootstrap', 'name' => 'Bootstrap', 'color' => 'text-purple'], // Sugestão: roxo
                ['icon' => 'fa-php', 'name' => 'PHP', 'color' => 'text-info'],
                ['icon' => 'fa-database', 'name' => 'SQLite', 'color' => 'text-secondary'],
                ['icon' => 'fa-laravel', 'name' => 'Laravel', 'color' => 'text-danger'],
                ['icon' => 'fa-git-alt', 'name' => 'Git', 'color' => 'text-dark'],
                ['icon' => 'fa-python', 'name' => 'Python', 'color' => 'text-primary'],
            ];
            @endphp

            @foreach($skills as $skill)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                <div class="skill-card">
                    <i class="{{ str_contains($skill['icon'], 'database') ? 'fas' : 'fab' }} {{ $skill['icon'] }} skill-icon {{ $skill['color'] }}"></i>
                    <h6 class="skill-title mt-2">
                        {{ $skill['name'] }}
                    </h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection 
