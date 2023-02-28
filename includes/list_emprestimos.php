
<?php 

    use App\Db\EmprestimoDao;
    
    $empDao = new EmprestimoDao('vwEmprestimos');

    $emprestimos = $empDao->listarAtivos('status = 1',null,null,'cod, nome_cliente, data_emp, obs, status  ');

    $resultados = '';

    foreach($emprestimos as $emp){
        $resultados .= '<tr>
                        <td>'.$emp->cod.'</td>
                        <td>'.$emp->nome_cliente.'</td>
                        <td>'.$emp->data_emp.'</td>
                        <td>'.$emp->obs.'</td>
                        <td>'.($emp->status==1 ? "Aberto" : "").'</td>
                        <td>
                        <a href = "edit_cliente.php?id_cliente=">
                        <button type="button" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        </button>
                        </a> 
                        </td>
                        <td>
                        <a href = "edit_cliente.php?id_cliente=">
                        <button type="button" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        </button>
                        </a> 
                        </td>'; 
    }
    $resultados = !empty($resultados)? $resultados : '<tr> <td colspan="7" class="text-center">Nenhum Cliente encontrado!</td> </tr>';
?>


<main>
    <div class="container">
    <section>
    <h1 class="text-center mt-2">EMPRÉSTIMOS ATIVOS</h1>
        <div class="col ">
                        <a href="livros_disp.php" >
                        <button class="btn btn-primary mt-4 ">Novo Empréstimo</button>
                        </a>
                        <a href="emp_fechados.php">
                        <button class="btn btn-danger mt-4 ">Ver Fechados</button>
                        </a>
        </div>
    </section>

    <section>
        <table class="table bg-light mt-3 text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Data Emp</th>
                    <th>Observação</th>
                    <th>Status</th>
                    <th>Ver Livros</th>
                    <th>Devolver</th>
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