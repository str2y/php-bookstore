<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }
    //@return array[Livro]

    // Retorna todos os livros no banco de dados

    public function livros($pesquisa = '')

    {
        $prepare = $this->db->prepare("select * from livros where usuario_id = 1 and titulo like :pesquisa");
        $prepare->bindValue(':pesquisa', "%$pesquisa%");
        $prepare->execute();
        $items = $prepare->fetchAll();

        $retorno = [];

        foreach ($items as $item) {
            $retorno[] = Livro::make($item);
        }

        return $retorno;
    }



    public function livro($id)
    {
        $sql = "select * from livros where id = " . $id;
        $query = $this->db->query($sql);
        $items = $query->fetchAll();
        $retorno = [];

        foreach ($items as $item) {
            $retorno[] = Livro::make($item);
        }

        return $retorno[0];
    }
}
