# TODO App Laravel

Uma aplicação de gerenciamento de tarefas (TODO) desenvolvida com Laravel. Os usuários podem se registrar, autenticar e gerenciar suas próprias tarefas. A aplicação oferece uma interface web e também uma API RESTful protegida por autenticação JWT.

## Funcionalidades

-   Cadastro e autenticação de usuários
-   CRUD de tarefas (título, descrição, data de vencimento e status)
-   Filtro de tarefas por status e data
-   Interface responsiva com layout bonito
-   API RESTful protegida com JWT

## Requisitos

-   PHP >= 8.1
-   Composer
-   Node.js & NPM
-   MySQL ou outro banco relacional suportado pelo Laravel

## Instalação

1. Clone o repositório:

    ```bash
    git clone [https://github.com/marcosvinicius417/todo-app]
    cd todo-app
    ```

2. Instale as dependências PHP:

    ```bash
    composer install
    ```

3. Instale as dependências frontend:

    ```bash
    npm install
    ```

   ```bash
    npm run dev
    ```
   
Apos rodar o VITE abre um novo terminal e faça os seguintes passos:

4. Copie o arquivo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

5. Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

6. Configure o banco de dados no arquivo `.env`

7. Execute as migrations:

    ```bash
    php artisan migrate
    ```

8. Gere a chave JWT:

    ```bash
    php artisan jwt:secret
    ```

9. Inicie o servidor Laravel:

    ```bash
     php -S 127.0.0.1:8000 -t public
    ```

10. Acesse o sistema:
    - Interface Web: [http://localhost:8000](http://localhost:8000)

## Autenticação Web

-   A aplicação utiliza o Laravel Breeze para login e registro via interface.

## API JWT

-   Endpoints disponíveis:
    -   `POST /api/register` — Registro de usuário
    -   `POST /api/login` — Login e retorno de token JWT
    -   `GET /api/me` — Dados do usuário autenticado
    -   `GET /api/tasks` — Lista de tarefas do usuário
    -   `POST /api/tasks` — Cria nova tarefa
    -   `PUT /api/tasks/{id}` — Atualiza tarefa
    -   `DELETE /api/tasks/{id}` — Deleta tarefa

## Testando a API

Use ferramentas como [Postman](https://www.postman.com) ou [Insomnia](https://insomnia.rest/) para testar a API.

No header das requisições protegidas, envie:

```
Authorization: Bearer SEU_TOKEN_JWT
```

---

Desenvolvido com Laravel.
