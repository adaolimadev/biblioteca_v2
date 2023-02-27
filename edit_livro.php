<?php
require(__DIR__.'/vendor/autoload.php');
use App\Db\LivroDao;
use App\Model\Livro;

if(!isset($_GET['id_livro']) or (!is_numeric($_GET['id_livro'])))
{
    header('Location:index.php');
    exit();
}
$livroDao = new LivroDao('livros','\\App\\Model\\Livro');
$obLivro = $livroDao->getLivro($_GET['id_livro']);


require(__DIR__.'/includes/header.php');
require(__DIR__.'/includes/formEdit_livro.php');
require(__DIR__.'/includes/footer.php');
