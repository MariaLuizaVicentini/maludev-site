<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malu Vicentini</title>

    <link href="{{ asset('css/stylesPortifolio/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="https://www.svgrepo.com/show/530666/gene-sequence.svg" type="image/x-icon">
</head>
<body>

    @yield('navbar')
   
    @yield('pagina-inicial')

    @yield('meus-projetos')

    @yield('minhas-habilidades')

    @yield('sobre-mim')

    @yield('meu-contato')

    @yield('chat')

</body>
</html>