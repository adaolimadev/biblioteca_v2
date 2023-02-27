<?php ?>
<div class="container bg-dark">
            <div class ="row"> 
                <div class = "col mt-5">
                    <h1 >Editar Cliente</h1>

                        <form  action="actions.php?action=up_cliente&id_cliente=<?=$_GET['id_cliente'] ?>" method="POST" role="form">
                            <div class="form-group">
                                    <label for="inputTitulo">Nome:</label>
                                    <input type="text" class="form-control" name="txtNome"  value="<?=$obCliente->nome?>" > <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputAutor">Email:</label>
                                    <input type="text" class="form-control" name="txtEmail"  value="<?=$obCliente->email?>"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputAutor">Cpf:</label>
                                    <input type="text" class="form-control" name="txtCpf"  value="<?=$obCliente->cpf?>"> <br>  
                            </div>
                            <div class="form-group">
                                    <label for="inputTitulo">Telefone:</label>
                                    <input type="text" class="form-control" name="txtTelefone"  value="<?=$obCliente->telefone?>"> <br>  
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                          
                             <a href = "clientes.php" ><button type="button" class="btn btn-danger">Cancelar</button> </a>
                        </form>
                </div>
            </div>  
         </div>