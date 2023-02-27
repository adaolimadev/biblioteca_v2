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

    public function listarLivros($where = null, $order = null, $limit = null,$fields='*')
    {
        return $this->select($where,$order,$limit,$fields)->fetchAll();

    }

    public function getLivro($id)
    {
        return $this->select('id_livro = '.$id)->fetchObject(self::class);
    }

    public function atualizarLivro($id,Livro $livro){
        $valores = [
            'titulo'    => $livro->getTitulo(),
            'autor'     => $livro->getAutor(),
            'editora'   => $livro->getEditora(),
            'genero'    => $livro->getGenero(),
            'ano'       => $livro->getAno(),
];
        return $this->update('id_livro = '.$id, $valores);
    }

    public function excluirLivro($id){
        return $this->delete('id_livro = '.$id);
    }


}