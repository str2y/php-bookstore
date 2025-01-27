<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed', 'unique:usuarios'],
        'senha'=>['required', 'min:8', 'max:32', 'strong']
    ], $_POST);

    if($validacao->naoPassou('registrar')){
        header('location: /login');
        exit();
    }

    $resultado = $database->query(
        "insert into usuarios ( nome, email, senha ) values ( :nome, :email, :senha )",
        null,
        [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_BCRYPT)
        ]
    );
    flash()->push('mensagem', 'Registrado com sucesso!');
    header('location: /login');
    exit();
}
header('location: /login');
exit();
