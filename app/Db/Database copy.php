<?php

namespace App\Db;

use App\Model\Log;
use \PDO;
use \PDOException;


class Database{

    const HOST = "db";
    const NAME = "bibliotecav2";
    const USER = "meuuser";
    const PASS = "minhasenha";

    private $table;

    private $connection;

    private $entity;


    public function __construct($table = null, $entity = null)
    {
        $this->table = $table;
        $this->entity = $entity;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            Log::createLog('Conectado ao banco com sucesso!','info');

        } catch (PDOException $e) {
            Log::createLog($e->getMessage(),'error');
            
        }

    }

    public function execute ($query, $params = [])
    {
        try 
        {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
            Log::createLog('Consulta executada com sucesso!','info');
        }
        catch(PDOException $e)
        {
            Log::createLog($e->getMessage(),'error');
            die('Erro inesperado, contate o Administrador do Sistema!');
        }
    }

    public function insert($valores)
    {    
        try
        {
            $campos = array_keys($valores);
            $binds = array_pad([], count($campos), '?');
            $query = 'INSERT INTO ' . $this->table. ' ('.implode(',',$campos).') values ('.implode(',',$binds).')';
            print_r($query);
            $this-> execute($query,array_values($valores));
            //return $this->connection->lastInsertId();
            Log::createLog('Inserção executada com sucesso!','info');
            return true;
            

        }
        catch(PDOException $e) 
        {
            Log::createLog($e->getMessage(),'error');
            die('Erro inesperado, contate o Administrador do Sistema!');
        }
    }












}