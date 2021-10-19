# Instruções para executar o projet

- Instale dependências do composer composer install
- Instale dependências do NPM npm install
- Criar arquivo .env pegando do guia .env.example
- Gerar sua chave api ( php artisan key:generate )
- No campo COINMARKET_API_KEY do .env Colar sua chave de API dada pelo CoinMarket
- Criar banco de dados para o projeto / Configure-o em .env
- Execute as migrações php artisan migrate
- npm run dev
- Execute o servidor php artisan serve
