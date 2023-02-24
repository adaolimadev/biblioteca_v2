<?php

namespace App\Db;
use App\Model\Livro;

class LivroDao extends Database
{
    public function inserirLivro(Livro $livro)
    {
        $valores = [
                    'titulo'    => $livro->getTitulo(),
                    'autor'     => $livro->getAutor(),
                    'editora'   => $livro->getEditora(),
                    'genero'    => $livro->getGenero(),
                    'ano'       => $livro->getAno(),
                    'disponivel'=> $livro->getDisponivel()
        ];
        return $this->insert($valores);
    }

    public function ExemploListar($where = null, $order = null, $limit = null,$fields='*')
    {

        // $this->__construct('livros', '\\App\\Model\\Livro')
        // return (new Database('livros', '\\App\\Model\\Livro'))->select($where,$order,$limit,$fields)->fetchAll();
        echo '<pre>'; print_r($this); echo '</pre>'; exit;
    }

    public function listarLivros($where = null, $order = null, $limit = null,$fields='*')
    {
        return $this->select($where,$order,$limit,$fields)->fetchAll();

    }


}