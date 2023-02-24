<?php ?>
<div class="container bg-dark">
            <div class ="row"> 
                <div class = "col mt-5">
                    <h1 >Cadastro de Livros</h1>

                        <form  action="actions.php?action=new_livro" method="POST" role="form">
                            <div class="form-group">
                                    <label for="inputTitulo">Título:</label>
                                    <input type="text" class="form-control" name="txtTitulo" id="inputTitulo"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputAutor">Autor:</label>
                                    <input type="text" class="form-control" name="txtAutor" id="inputAutor"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputTitulo">Editora:</label>
                                    <input type="text" class="form-control" name="txtEditora" id="inputEditora"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputGenero">Gênero:</label>
                                    <input type="text" class="form-control" name="txtGenero" id="inputGenero"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputAno">Ano:</label>
                                    <input type="number" class="form-control" name="txtAno" id="inputAno"> <br>  
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          
                             <a href = "livros.php" ><button type="button" class="btn btn-danger">Cacelar</button> </a>
                        </form>
                </div>
            </div>  
         </div>