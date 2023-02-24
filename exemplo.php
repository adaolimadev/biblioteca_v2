<?php

require(__DIR__.'/vendor/autoload.php');

use App\Db\LivroDao;
use App\Model\Livro;


//cria um objeto livro e atribui valores aos atributos do metodo construtor
$objLivro = new Livro(
    'O segredo',
    'Fulano',
    'Alguma',
    'Suspense',
    2023
);

//cria uma instancia do livroDao passando por parametro $table nome da tabela do Banco de dados 
$objLivroDao = new LivroDao('livros');

//Passa para o metodo inserir o objeto livro ja preenchido
$objLivroDao->inserirLivro($objLivro);

//Mesma forma de fazer o código acima mas de forma mais simplificda
(new LivroDao('livros'))->inserirLivro(
    new Livro(
        'O segredo',
        'Fulano',
        'Alguma',
        'Suspense',
        2023
    )
);











