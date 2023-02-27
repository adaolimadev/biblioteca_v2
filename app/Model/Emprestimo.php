<?php

namespace App\Model;

class Emprestimo extends Model
{
    private $id_emprestimo;
    private $id_cliente;
    private $observacao;
    private $data;
    private $status;

    public function __construct($id_cliente, $observacao, $data, $status){
        $this->setId_cliente($id_cliente);
        $this->setObservacao($observacao);
        $this->setData($data);
        $this->setStatus($status);
    }   

    public function setId_emprestimo($id_emprestimo){
        $this->id_emprestimo = $id_emprestimo;
    }

    public function getId_emprestimo(){
    return $this->id_emprestimo ;
    }
        
    public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    public function getId_cliente(){
    return $this->id_cliente ;
    }

    public function setObservacao($observacao){
        $this->observacao = $observacao;
    }

    public function getObservacao(){
    return $this->observacao ;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getData(){
    return $this->data ;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
    return $this->status ;
    }


}