<?php

$livros = (new DB)->livros($_REQUEST['pesquisar']);

view('index', compact('livros'));
