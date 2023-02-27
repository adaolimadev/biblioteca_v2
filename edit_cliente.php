<?php
require(__DIR__.'/vendor/autoload.php');
use App\Db\ClienteDao;
use App\Model\Cliente;

if(!isset($_GET['id_cliente']) or (!is_numeric($_GET['id_cliente'])))
{
    header('Location:index.php');
    exit();
}
$clienteDao = new ClienteDao('clientes','\\App\\Model\\Cliente');
$obCliente = $clienteDao->getCliente($_GET['id_cliente']);


require(__DIR__.'/includes/header.php');
require(__DIR__.'/includes/formEdit_cliente.php');
require(__DIR__.'/includes/footer.php');
