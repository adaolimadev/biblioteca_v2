
<?php 

    use App\Db\ClienteDao;
    
    $clienteDao = new ClienteDao('clientes','\\App\\Model\\Cliente');

    $clientes = $clienteDao->listarClientes(null,null,null,'*');

    $resultados = '';

    foreach($clientes as $cli){
        $resultados .='<tr>
                        <td>'.$cli->getId_cliente().'</td>
                        <td>'.$cli->getNome().'</td>
                        <td>'.$cli->getEmail().'</td>
                        <td>'.$cli->getCpf().'</td>
                        <td>'.$cli->getTelefone().'</td>
                        <td>
                        <a href = "edit_cliente.php?id_cliente='.$cli->getId_cliente().'">
                        <button type="button" class="btn btn-primary">Editar</button>
                        </a> 
                        <a href = "del_cliente.php?id_cliente='.$cli->getId_cliente().'">
                        <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                    </td>
                        </tr>';
    }
    $resultados = !empty($resultados)? $resultados : '<tr> <td colspan="6" class="text-center">Nenhum Cliente encontrado!</td> </tr>';
?>


<main>
    <div class="container">
    <section>
        <div class="col d-flex align-items-end">
                        <a href="cad_cliente.php">
                        <button class="btn btn-primary mt-4 ">Novo Cliente</button>
                        </a>
        </div>
    </section>

    <section>
        <table class="table bg-light mt-3 text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cpf</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>

    <section>
        
    </section>
    </div>
</main>