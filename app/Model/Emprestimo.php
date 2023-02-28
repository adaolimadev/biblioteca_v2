<?php

namespace App\Model;

class Emprestimo extends Model
{
    private $id_emprestimo;
    private $id_cliente;
    private $observacao;
    private $data_emp;
    private $status;
    private $data_dev;

    public function __construct($id_cliente, $observacao, $data_emp, $status = 1, $data_dev = null){
        $this->setId_cliente($id_cliente);
        $this->setObservacao($observacao);
        $this->setData_emp($data_emp);
        $this->setStatus($status);
        $this->setData_dev($data_dev);

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

    public function setData_emp($data_emp){
        $this->data_emp = $data_emp;
    }

    public function getData_emp(){
    return $this->data_emp ;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
    return $this->status ;
    }

    public function setData_dev($data_dev){
        $this->data_dev = $data_dev;
    }

    public function getData_dev(){
    return $this->data_dev ;
    }


}