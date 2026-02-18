# 🚀 Portfólio Profissional | Malu Vicentini
Bem-vindo ao repositório do meu portfólio! Este projeto não é apenas uma vitrine dos meus trabalhos, mas também um exemplo prático de aplicação estruturada em Laravel 8 com foco em organização e automação.

---

# 👩‍💻 Sobre Mim
Sou estudante de Gestão de TI na PUC Campinas. Atualmente atuo como QA, garantindo a qualidade de funcionalidades e APIs, e estou em transição para o Desenvolvimento Back-end. Minha meta é construir sistemas que unam performance e código limpo.

---
# 🛠️ Stack Tecnológica
O projeto foi construído utilizando versões específicas para garantir estabilidade e compatibilidade:
- Framework: Laravel 8.83.29
- Linguagem: PHP 7.4.33
- Gerenciador: Composer 2.9.1
- Banco de Dados: SQLite
- Front-end: Bootstrap 5.3.0 & Font Awesome 6.0.0

---
# 📂 Projetos em Destaque
Como visto na aplicação, os projetos refletem minha evolução:
- Controle de Séries: Gestão completa (CRUD) desenvolvida em Laravel.
- Busca Vagas LinkedIn: Automação de scraping para otimização de busca de emprego.
- Cotação Banco Central: Consumo de API externa para dados financeiros.
- Automação Web Login: Script em Python + Selenium para testes automatizados.

---
# ⚙️ Configuração do Ambiente (Local)
Siga os passos abaixo para rodar o projeto na sua máquina:

1. Preparando o Banco de Dados (SQLite)
Certifique-se de que o arquivo database.sqlite existe na pasta /database. No seu arquivo .env, configure o caminho absoluto:

```
DB_CONNECTION=sqlite
DB_DATABASE=C:\caminho\completo\para\seu\projeto\database\database.sqlite
```
Atenção: O Laravel exige o caminho completo (absolute path) para o SQLite funcionar corretamente.

2. Instalação e Chaves
No terminal, dentro da pasta do projeto:
```
# Instalar dependências do PHP
composer install

# Gerar a chave única da aplicação
php artisan key:generate
```
3. Inicialização
```
# Limpar caches de configuração antigos
php artisan config:clear

# Rodar as migrações do banco de dados
php artisan migrate

# Iniciar o servidor local
php artisan serve
```
Acesse em: http://127.0.0.1:8000

---
 Checklist de Execução

[✅] Arquivo .env criado (copiado do .env.example).

[✅] Caminho do DB_DATABASE conferido.

[✅] APP_KEY gerada com sucesso.

[✅] PHP 7.4+ instalado e configurado no PATH.

