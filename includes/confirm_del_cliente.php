<?php
use \App\Db\ClienteDao;

if(!isset($_GET['id_cliente']) or (!is_numeric($_GET['id_cliente'])))
{
    header('Location:index.php');
    exit();
}
$clienteDao = new ClienteDao('clientes','\\App\\Model\\Cliente');
$obCliente = $clienteDao->getCliente($_GET['id_cliente']);

//Validação do post
if(isset($_POST['excluir'])){
        
    $clienteDao->excluirCliente($_GET['id_cliente']);

    echo "<script> alert ('cliente excluido com sucesso!');
                    location.href='clientes.php'; </script>";
    exit;
}

?>

<main>
    <h2 class="mt-3">Excluir Cliente</h2>

    <div class="form-group">
            <p>Você deseja realmente excluir o cliente: <strong><?= $obCliente->nome?> </strong>?</p>
        </div>

    <form method="post">
    <div class="form-group mt-3">
        <a href="clientes.php">
            <button type="button" class="btn btn-success">Cancelar</button>
        </a>

        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>

</main>