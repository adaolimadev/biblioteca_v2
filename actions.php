<?php
   require(__DIR__.'/vendor/autoload.php');

   use App\Db\LivroDao;
   use App\Model\Livro;
   use App\Model\Log;



    $action = array_key_exists('action',$_GET) ? $_GET['action'] : null;

    switch ($action) {
        case 'new_livro':
            
            $objLivro = new Livro(
                $_POST['txtTitulo'],
                $_POST['txtAutor'],
                $_POST['txtEditora'],
                $_POST['txtGenero'],
                $_POST['txtAno']
            );

            $objLivroDao = new LivroDao('livros');

            $objLivroDao->inserirLivro($objLivro);
            Log::createLog('Livro inserido com sucesso!');

            echo "<script> alert ('Livro cadastrado com sucesso!');
                    location.href='livros.php'; </script>";

            
            break;
        
        default:
        header('Location: index.php');
            break;
    }



?>