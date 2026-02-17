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
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('pagina-inicial')

    @yield('meus-projetos')

    @yield('minhas-habilidades')

    @yield('sobre-mim')

    @yield('meu-contato')

    
    <div id="chat-circle" class="btn btn-dark rounded-circle shadow" style="position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; z-index: 1000; cursor: pointer;">
        <i class="fas fa-comment-dots fa-lg text-white"></i>
    </div>

    <div id="chat-box" class="card shadow d-none">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <span>Assistente IA</span>
            <button type="button" class="btn-close btn-close-white" id="chat-close"></button>
        </div>
        <div id="chat-content" class="card-body bg-light" style="height: 350px; overflow-y: auto; display: flex; flex-direction: column; gap: 10px;">
            <div class="p-2 bg-white rounded shadow-sm border align-self-start" style="max-width: 80%;">Como posso te ajudar hoje?</div>
        </div>
        <div class="card-footer bg-white border-top-0">
            <div class="input-group">
                <input type="text" id="chat-input" class="form-control border-0 bg-light" placeholder="Pergunte algo...">
                <button class="btn btn-dark" id="chat-send"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatCircle = document.getElementById('chat-circle');
        const chatBox = document.getElementById('chat-box');
        const chatClose = document.getElementById('chat-close');
        const chatSend = document.getElementById('chat-send');
        const chatInput = document.getElementById('chat-input');
        const chatContent = document.getElementById('chat-content');

        chatCircle.onclick = () => chatBox.classList.toggle('d-none');
        chatClose.onclick = () => chatBox.classList.add('d-none');

        async function sendMessage() {
            const text = chatInput.value.trim();
            if (!text) return;

            appendMsg(text, 'user');
            chatInput.value = '';

            const loadingId = 'loading-' + Date.now();
            appendMsg('Processando...', 'ai', loadingId);

            try {
                const response = await fetch('/groq/chat-malu', { 
                    method: 'POST',
                    headers: { 
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ mensagem: text }) 
                });

                if (!response.ok) throw new Error('Erro na requisição');

                const data = await response.json();
                
                const botMessage = document.getElementById(loadingId);
                botMessage.innerText = data.resposta; 

            } catch (e) {
                const botMessage = document.getElementById(loadingId);
                if (botMessage) botMessage.innerText = "Erro ao conectar com a IA.";
                console.error("Erro no chat:", e);
            }
        }

        function appendMsg(text, sender, id = '') {
            const div = document.createElement('div');
            if (id) div.id = id;
            div.className = `p-2 rounded shadow-sm border ${sender === 'user' ? 'bg-dark text-white align-self-end' : 'bg-white align-self-start'}`;
            div.style.maxWidth = '80%';
            div.style.wordBreak = 'break-word';
            div.innerText = text;
            chatContent.appendChild(div);
            chatContent.scrollTop = chatContent.scrollHeight;
        }

        chatSend.onclick = sendMessage;
        chatInput.onkeypress = (e) => { if(e.key === 'Enter') { e.preventDefault(); sendMessage(); } };
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>