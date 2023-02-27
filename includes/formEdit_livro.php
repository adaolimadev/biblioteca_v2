<?php ?>
<div class="container bg-dark">
            <div class ="row"> 
                <div class = "col mt-5">
                    <h1 >Cadastro de Livros</h1>

                        <form  action="actions.php?action=up_livro&id_livro=<?=$_GET['id_livro'] ?>" method="POST" role="form">
                            <div class="form-group">
                                    <label for="inputTitulo">Título:</label>
                                    <input type="text" class="form-control" name="txtTitulo" id="txtTitulo" value="<?=$obLivro->titulo?>" > <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputAutor">Autor:</label>
                                    <input type="text" class="form-control" name="txtAutor" id="txtAutor" value="<?=$obLivro->autor?>"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputTitulo">Editora:</label>
                                    <input type="text" class="form-control" name="txtEditora" id="txtEditora" value="<?=$obLivro->editora?>"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputGenero">Gênero:</label>
                                    <input type="text" class="form-control" name="txtGenero" id="txtGenero" value="<?=$obLivro->genero?>"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputAno">Ano:</label>
                                    <input type="number" class="form-control" name="txtAno" id="txtAno" value="<?=$obLivro->ano?>"> <br>  
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                          
                             <a href = "livros.php" ><button type="button" class="btn btn-danger">Cancelar</button> </a>
                        </form>
                </div>
            </div>  
         </div>