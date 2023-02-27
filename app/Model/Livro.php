<?php

namespace App\Model;

class Livro extends Model
{
    private $id_livro;
    private $titulo;
    private $autor;
    private $editora;
    private $genero;
    private $ano;
    private $disponivel;

    public function __construct($titulo = null, $autor= null, $editora=null, $genero=null, $ano=null,$disponivel = null){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setEditora($editora);
        $this->setGenero($genero);
        $this->setAno($ano);
        $this->setDisponivel($disponivel);
    }   

    public function setId_livro($id_livro){
        $this->id_livro = $id_livro;
    }

    public function getId_livro(){
    return $this->id_livro;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setEditora($editora){
        $this->editora = $editora;
    }

    public function getEditora(){
        return $this->editora;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getGenero(){
       return $this->genero;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function getAno(){
        return $this->ano;
    }

    public function setDisponivel($disponivel){
        $this->disponivel = $disponivel;
    }

    public function getDisponivel(){
        return $this->disponivel;
    }


}