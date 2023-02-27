
<?php 

    use App\Db\LivroDao;
    
    $livroDao = new LivroDao('livros','\\App\\Model\\Livro');

    $livros = $livroDao->listarLivros(null,null,null,'*');

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
                        <a href = "edit_livro.php?id_livro='.$livro->getId_livro().'">
                        <button type="button" class="btn btn-primary">Editar</button>
                        </a> 
                        <a href = "del_livro.php?id_livro='.$livro->getId_livro().'">
                        <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                    </td>
                        </tr>';
    }


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