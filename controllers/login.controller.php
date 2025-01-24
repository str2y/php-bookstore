<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $resultado = $database->query(
        "insert into usuarios ( nome, email, senha ) values ( :nome, :email, :senha )",
        [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );
    dump($resultado);
}

view('login');
