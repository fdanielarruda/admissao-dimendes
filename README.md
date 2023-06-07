# DIMENDES

Aplicação desenvolvida com o framework Laravel (versão 9).

## Requisitos
- PHP 8 ou superior

## Instalação

Para utilizar o projeto realize os seguintes passos:

```bash
git clone https://github.com/fdanielarruda/admissao-dimendes
```

```bash
cd admissao-dimendes
```

Instalando as dependências necessárias do projeto:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Agora configure o arquivo .env com as informações do seu banco de dados. Lembre-se de antes criar uma tabela no seu banco!

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_user_do_banco
DB_PASSWORD=sua_senha_do_banco
```

Com tudo configurado você pode rodar o comando a seguir para que as migrations do projeto criem seu banco de dados

```bash
php artisan migrate
```

Pronto, agora é só rodar o projeto!

```bash
php artisan serve
```

## Rotas

```
METD.  URL                 AÇÃO                 

[GET]  /                 | Login
[GET]  /register         | Cadastro
[GET]  /logout           | Sair
[GET]  /task             | Lista de Tarefas
[GET]  /task/create      | Cadastrar Tarefa
[GET]  /task/:id/edit    | Editar Tarefa
[GET]  /task/:id/delete  | Deletar Tarefa

[POST] /login            | Realizar login
[POST] /store_user       | Cadastrar-se na aplicação
[POST] /task/store       | Salvar Tarefa

[PUT]  /task/:id         | Atualizar Tarefa
```

## O que fazer no sistema?

Depois de se cadastrar e realizar o login você pode cadastrar quantas tarefas desejar! Além disso, você poderá editá-las e removê-las.
