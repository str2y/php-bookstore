<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if ($validacao->naoPassou('login')) {
        header('location: /login');
        exit();
    }

    $usuario = $database->query(
        "select * from usuarios
    where email = :email",
        Usuario::class,
        compact('email')
    )
        ->fetch();

    if ($usuario) {

        if (!password_verify($_POST['senha'], $usuario->senha)) {
            flash()->push('validacoes_login', ['Usuário ou senha estão incorretos']);
            header('location: /login');
            exit();
        }

        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', 'Seja bem-vindo ' . $usuario->nome . '!');
        header('location: /');
        exit();
    }
}

view('login');
