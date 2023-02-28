<?php

namespace App\Db;
use App\Model\Cliente;

class ClienteDao extends Database
{
    public function inserirCliente(Cliente $cliente)
    {
        $valores = [
                    'nome'    => $cliente->getNome(),
                    'email'     => $cliente->getEmail(),
                    'cpf'   => $cliente->getCpf(),
                    'telefone'    => $cliente->getTelefone(),
                    
        ];
        return $this->insert($valores);
    }

    public function listarClientes($where = null, $order = null, $limit = null,$fields='*')
    {
        return $this->select($where,$order,$limit,$fields)->fetchAll();

    }

    public function getCliente($id)
    {
        return $this->select('id_cliente = '.$id)->fetchObject(self::class);
    }

    public function atualizarCliente($id,Cliente $cliente){
        $valores = [
            'nome'    => $cliente->getNome(),
            'email'     => $cliente->getEmail(),
            'cpf'   => $cliente->getCpf(),
            'telefone'    => $cliente->getTelefone(),
           
];
        return $this->update('id_cliente = '.$id, $valores);
    }

    public function excluirCliente($id){
        return $this->delete('id_cliente = '.$id);
    }


}