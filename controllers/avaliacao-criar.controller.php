<?php

if($_SERVER['REQUEST_METHOD']= 'POST'){
    header('location: /');
    exit();
}

$database->query("
insert into avaliacoes(usuario_id, livro_id, avaliacao, nota)
values (:usuario_id, :livro_id, :avaliacao, :nota",
null,
compact('usuario_id', 'livro_id', 'avaliacao', 'nota'));

flash()->push('mensagem', 'Avaliação criada com sucesso!');
header('location: /livro?id='. $livro_id);
exit();