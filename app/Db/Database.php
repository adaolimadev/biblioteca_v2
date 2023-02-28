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
            Log::createLog('Erro na conexão: : '.$e->getMessage(),'error'); 
        }
    }

    public function execute ($query, $params = [])
    {
        try 
        {
            $statement = $this->connection->prepare($query);
            Log::createLog('Query -> '.$query.' <-  a ser executada.','info');
            $statement->execute($params);
            Log::createLog('Query -> '.$query.' <- executada com sucesso!','info');
            return $statement; 
        }
        catch(PDOException $e)
        {
            Log::createLog('Erro no execute: '.$e->getMessage(),'error');
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
            $this-> execute($query,array_values($valores));
            Log::createLog('Inserção executada com sucesso!','info');
            return $this->connection->lastInsertId();
        }
        catch(PDOException $e) 
        {
            Log::createLog('Erro no insert: '.$e->getMessage(),'error');
            die('Erro inesperado, contate o Administrador do Sistema!');
        }
    }

    public function select($where=null, $order=null, $limit=null, $fields='*')
    {
        try {
            //Verifica se os parametros não são nulos
            $where = !empty($where) ? 'WHERE '.$where : '';
            $order = !empty($order) ? 'ORDER BY '.$order : '';
            $limit = !empty($limit) ? 'LIMIT '.$limit : '';
            
            //Monta a query
            $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
            
            //Executa a query
            $st = $this->execute($query);
            $st->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, $this->entity );

            Log::createLog('SELECT executada com sucesso!','info');
            return $st;
        } catch (PDOException $e) {
            Log::createLog('Erro no select: '.$e->getMessage(),'error');
            die('Erro inesperado, contate o Administrador do Sistema!');
        }
    }

    //função para trazer Objetos (sem classe) de uma View do Banco de dados
    public function selectView($where=null, $order=null, $limit=null, $fields='*')
    {
        try {
            //Verifica se os parametros não são nulos
            $where = !empty($where) ? 'WHERE '.$where : '';
            $order = !empty($order) ? 'ORDER BY '.$order : '';
            $limit = !empty($limit) ? 'LIMIT '.$limit : '';
            
            //Monta a query
            $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
            
            //Executa a query
            $st = $this->execute($query);
            $st->setFetchMode( PDO::FETCH_OBJ);

            Log::createLog('SELECT executada com sucesso!','info');
            return $st;
        } catch (PDOException $e) {
            Log::createLog('Erro no select: '.$e->getMessage(),'error');
            die('Erro inesperado, contate o Administrador do Sistema!');
        }
    }
    
    public function delete($where)
    {
        try{
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

        $this->execute($query);
        Log::createLog('DELETE executado com sucesso!','info');
        return true;
        }catch (PDOException $e) {
            Log::createLog('Erro no delete: '.$e->getMessage(),'error');
            die('Erro inesperado, contate o Administrador do Sistema!');
        }
    }

    public function update($where, $values)
    {
        $fields = array_keys($values);

        $query = 'UPDATE '.$this->table. ' SET '.implode('=?, ',$fields).'=? WHERE '.$where. ';';
        
        $this->execute($query, array_values($values));
        Log::createLog('UPDATE executado com sucesso!','info');
        return true;
    }

}