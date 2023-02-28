<?php

namespace App\Db;
use App\Model\Emprestimo;

class EmprestimoDao extends Database
{
    public function inserirEmprestimo(Emprestimo $emprestimo)
    {
        $valores = [
                    'id_cliente'    => $emprestimo->getId_cliente(),
                    'data_emp'     => $emprestimo->getData_emp(),
                    'obs'   => $emprestimo->getObservacao()(),
                    'status'    => 1
                    
        ];
        return $this->insert($valores);
    }

    public function listarEmprestimos($where = null, $order = null, $limit = null,$fields='*')
    {
        return $this->select($where,$order,$limit,$fields)->fetchAll();

    }

    public function listarAtivos($where = null, $order = null, $limit = null,$fields='*')
    {
        return $this->selectView($where,$order,$limit,$fields)->fetchAll();
    }


    public function getEmprestimo($id)
    {
        return $this->select('id_emprestimo = '.$id)->fetchObject(self::class);
    }

    public function fecharEmprestimo($id){
        $valores = ['status = 0',
                    'data_dev = CURRENT_TIMESTAMP'];
        return $this->update('id_emprestimo = '.$id, $valores);
    }

}