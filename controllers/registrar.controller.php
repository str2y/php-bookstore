<?php

require 'Validacao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'senha'=>['required', 'min:8', 'max:32', 'strong']
    ], $_POST);

    if($validacao->naoPassou()){
        header('location: /login');
        exit();
    }

    $resultado = $database->query(
        "insert into usuarios ( nome, email, senha ) values ( :nome, :email, :senha )",
        null,
        [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );
    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
}
