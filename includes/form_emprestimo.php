<?php ?>
<div class="container bg-dark">
            <div class ="row"> 
                <div class = "col mt-5">
                    <h1 >Cadastro de Empréstimo</h1>

                        <form  action="actions.php?action=new_cliente" method="POST" role="form">
                            <div class="form-group">
                                    <label for="txtTitulo">Nome:</label>
                                    <input type="text" class="form-control" name="txtNome" > <br>  
                            </div>
                            <div class="form-group">
                                    <label >Email:</label>
                                    <input type="email" class="form-control" name="txtEmail" > <br>  
                            </div>
                            <div class="form-group">
                                    <label >Cpf:</label>
                                    <input type="text" class="form-control" name="txtCpf" > <br>  
                            </div>
                            <div class="form-group">
                                    <label >Telefone:</label>
                                    <input type="text" class="form-control" name="txtTelefone" > <br>  
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Enviar</button>
                             <a href = "clientes.php" ><button type="button" class="btn btn-danger">Cancelar</button> </a>
                        </form>
                </div>
            </div>  
         </div>