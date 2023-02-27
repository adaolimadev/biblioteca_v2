<?php

namespace App\Model;

class Cliente extends Model
{
    private $id_cliente;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;

    public function __construct($nome = null, $email= null, $cpf=null, $telefone=null){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setCpf($cpf);
        $this->setTelefone($telefone);
    }   

    public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    public function getId_cliente(){
    return $this->id_cliente ;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
    return $this->nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
    return $this->email;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
    return $this->cpf;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}