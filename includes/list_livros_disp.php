<style>
        input[type="submit"] {
            display: block;
            margin: 0 auto;
            width: 300px;
        }
</style>
<?php 

    use App\Db\LivroDao;
    
    $livroDao = new LivroDao('livros','\\App\\Model\\Livro');

    $livros = $livroDao->listarLivros('disponivel = 1',null,null,'*');

    $resultados = '';

    foreach($livros as $livro){
        $resultados .='<tr>
                        <td>'.$livro->getId_livro().'</td>
                        <td>'.$livro->getTitulo().'</td>
                        <td>'.$livro->getAutor().'</td>
                        <td>'.$livro->getEditora().'</td>
                        <td>'.$livro->getGenero().'</td>
                        <td>'.$livro->getAno().'</td>
                        <td>'.($livro->getDisponivel()==1 ? 'Disponível': 'Indisponível').'</td>
                        <td> 
                            <input type="checkbox" name="ckLivros[]" value="'.$livro->getId_livro().'">
                        </td>
                        </tr>';
    }


    $resultados = !empty($resultados)? $resultados : '<tr> <td colspan="8" class="text-center">Nenhum Livro encontrado!</td> </tr>';
?>


<main>
    <div class="container">
    <section>
    <h1 class="text-center mt-2">LIVROS DISPONÍVEIS</h1>
    <h2 class="text-center mt-2">Selecione os livros que deseja emprestar:</h2>
    </section>

    <section class="text-center">
    <form action="cad_emprestimo.php" method="post">
        <table class="table bg-light mt-2 text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>Genero</th>
                    <th>Ano</th>
                    <th>Status</th>
                    <th>Selecionar</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
        <input type="submit" class ="btn btn-primary" id="btnEmprestar" value="Emprestar Livros">
        
</form>

<a href="emprestimos.php"> <button class="btn btn-danger mt-2">Cancelar</button></a>
    </section>

    <section>
        
    </section>
    </div>
</main>