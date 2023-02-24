
<?php 

    use App\Db\LivroDao;
    use App\Model\Livro;

    $livroDao = new LivroDao('livros','\\App\\Model\\Livro');

    $livros = $livroDao->listarLivros(null,null,null,'*');

    echo '<pre>'; print_r($livros); echo '</pre>'; exit;

    $resultados = !empty($resultados)? $resultados : '<tr> <td colspan="8" class="text-center">Nenhum Livro encontrado!</td> </tr>';
?>


<main>
    <div class="container">
    <section>
        <div class="col d-flex align-items-end">
                        <a href="cad_livro.php">
                        <button class="btn btn-primary mt-4 ">Novo Livro</button>
                        </a>
        </div>
    </section>

    <section>
        <table class="table bg-light mt-3 text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Genero</th>
                    <th>Ano</th>
                    <th>Status</th>
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