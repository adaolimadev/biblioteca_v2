<?php
use \App\Db\LivroDao;

if(!isset($_GET['id_livro']) or (!is_numeric($_GET['id_livro'])))
{
    header('Location:index.php');
    exit();
}
$livroDao = new LivroDao('livros','\\App\\Model\\Livro');
$obLivro = $livroDao->getLivro($_GET['id_livro']);

//Validação do post
if(isset($_POST['excluir'])){
        
    $livroDao->excluirLivro($_GET['id_livro']);

    echo "<script> alert ('Livro excluido com sucesso!');
                    location.href='livros.php'; </script>";
    exit;
}

?>

<main>
    <h2 class="mt-3">Excluir Livro</h2>

    <div class="form-group">
            <p>Você deseja realmente excluir o livro: <strong><?= $obLivro->titulo?> </strong>?</p>
        </div>

    <form method="post">
    <div class="form-group mt-3">
        <a href="livros.php">
            <button type="button" class="btn btn-success">Cancelar</button>
        </a>

        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>

</main>