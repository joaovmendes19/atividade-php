#### Instalação e Configuração Inicial

1. **Clone o Repositório:**
   ```bash
   git clone https://github.com/joaovmendes19/atividade-php.git
   cd atividade-php
   ```

2. **Instale as Dependências:**
   ```bash
   composer install
   ```

3. **Crie um arquivo `.env` baseado no `.env.example`:**
   ```bash
   cp .env.example .env
   ```

4. **Configure o Banco de Dados:**
   - Abra o arquivo `.env` e configure as credenciais do banco de dados.

5. **Gere a chave de Aplicativo:**
   ```bash
   php artisan key:generate
   ```

#### Migração do Banco de Dados

1. **Execute as Migrações:**
   ```bash
   php artisan migrate
   ```

#### Utilização da Aplicação

1. **Inicie o Servidor Embutido:**
   ```bash
   php artisan serve
   ```

2. **Acesse a Aplicação:**
   - Abra o navegador e acesse [http://localhost:8000](http://localhost:8000).

3. **Explore as Funcionalidades:**
   - Navegue pelas diferentes páginas e funcionalidades da aplicação.
