<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';

$livros = $database->query("select * from livros where titulo like :filtro", Livro::class, ['filtro'=>"%$pesquisar%"])->fetchAll();

view('index', compact('livros'));
