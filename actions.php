<?php
   require(__DIR__.'/vendor/autoload.php');

   use App\Db\LivroDao;
   use App\Model\Livro;
   use App\Db\ClienteDao;
   use App\Model\Cliente;
   use App\Model\Log;

    $action = array_key_exists('action',$_GET) ? $_GET['action'] : null;

    switch ($action) {
        case 'new_livro':
            
            $objLivro = new Livro(
                $_POST['txtTitulo'],
                $_POST['txtAutor'],
                $_POST['txtEditora'],
                $_POST['txtGenero'],
                $_POST['txtAno'],
                1
            );

            $objLivroDao = new LivroDao('livros');

            $objLivroDao->inserirLivro($objLivro);
            Log::createLog('Livro inserido com sucesso!');

            echo "<script> alert ('Livro cadastrado com sucesso!');
                    location.href='livros.php'; </script>";
        break;
        
        case 'up_livro':
            
            $tempLivro = new Livro(
                $_POST['txtTitulo'],
                $_POST['txtAutor'],
                $_POST['txtEditora'],
                $_POST['txtGenero'],
                $_POST['txtAno'],
                1
            );

            $livroDao = new LivroDao('livros');

            $livroDao->atualizarLivro($_GET['id_livro'],$tempLivro);

            Log::createLog('Livro atualizado com sucesso!');

            echo "<script> alert ('Livro Atualizado com sucesso!');
                    location.href='livros.php'; </script>";
        break;

        case 'new_cliente':
            
            $objCliente = new Cliente(
                $_POST['txtNome'],
                $_POST['txtEmail'],
                $_POST['txtCpf'],
                $_POST['txtTelefone']
            );

            $objClienteDao = new ClienteDao('clientes');

            $objClienteDao->inserirCliente($objCliente);
            Log::createLog('Cliente inserido com sucesso!');

            echo "<script> alert ('Cliente cadastrado com sucesso!');
                    location.href='clientes.php'; </script>";
        break;

        case 'up_cliente':
            
            $tempCliente = new Cliente(
                $_POST['txtNome'],
                $_POST['txtEmail'],
                $_POST['txtCpf'],
                $_POST['txtTelefone']
            );

            $clienteDao = new ClienteDao('clientes');

            $clienteDao->atualizarCliente($_GET['id_cliente'],$tempCliente);

            Log::createLog('Cliente atualizado com sucesso!');

            echo "<script> alert ('Cliente Atualizado com sucesso!');
                    location.href='clientes.php'; </script>";
        break;

        default:
        header('Location: index.php');
        break;
        


        
    }



?>