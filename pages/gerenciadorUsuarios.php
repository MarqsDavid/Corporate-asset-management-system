<?php include('../php/dadosArmazenados.php'); ?>
<?php include("../components/modalEditUsu.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/gerenUsu.css">
        <!-- ======= boxicons ===================== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Gerenciamento de Usuários</title>
        <!-- ======= bootstrap ===================== -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">
    <!-- ======= cdn.datatables ===================== -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
   
</head>
<body>
    <!-- ============ Nav  ================== -->
    <div class="grid-container">
        <div class="header">
            <figure>
                <img src="../icons/icone-engrenagem.png" alt=""width="40" height="40">
            </firgure>
            <nav>
                 
                <div class="nav-user">USUARIOS</div>
                <div class="nav-add"><a href="./formularioUsuarios.php">ADICIONAR</a></div>

            </nav>
        </div>

        <div class="exit">
            <div class="box">
                <div class='bx bx-log-out icon' ></div>
                <a href="../php/sai.php">Sai</a>
            </div>
        </div>
     <!-- ============ Tabela  ================== -->

        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table shadow-lg p-3 mb-5 bg-white rounded ">
                    <table id="example" class="table table-striped table-bordered table-hover ">
                    <thead class="p-3 mb-2 bg-primary text-white " >
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Data de Craição</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)) {
                            
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['sobrenome']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['celular']."</td>";
                            echo "<td>".$user_data['genero']."</td>";
                            echo "<td>".$user_data['senha']."</td>";
                            echo "<td>".$user_data['dataCriacao']."</td>";
                            
                            echo "<td>
                            <a class='btn btn-sm btn-primary' data-bs-toggle='modal' href='#myModalEdit'id=$user_data[id]  title='Editar '>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                </a> 
                                <a class='btn btn-sm btn-danger' data-bs-toggle='modal' href='#myModalDelet'id=$user_data[id]' title='Deletar'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg>
                                </a>
                                </td>";
                            echo "</tr>";
                            
                            // Modal Delet

                            echo  "<div id='myModalDelet' class='modal'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            
                                            <div class='modal-header'>
                                                <h4 class='modal-title'>Deletar usuário</h4>
                                                
                                            </div>

                                            <div class='modal-body'>
                                                <p>Tem certeza de que deseja excluir este usuário?</p>
                                                <form method='POST' action='../php/dadosArmazenados.php' id='form-delete-user'>
                                                    <input type='hidden' name='id'>
                                                    
                                                </form>
                                            </div>

                                            <div class='modal-footer'>
                                            <a  href='../php/delete.php?id=$user_data[id]' title='Deletar'>
                                            <button type='button' ' class='btn btn-success'>Confirma</button>
                                            </a>
                                            <button type='button' data-bs-dismiss='modal' class='btn btn-danger'>Cancela</button>

                                            </div>

                                        </div>
                                    </div>
                                    </div>";     
                                    
            
                        }
                        ?>
                        

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- =======  Data-Table  = End  ===================== -->

    <!-- ============ Java Script Files  ================== -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
     <script>
        $(document).ready( function () {
        $('#example').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por paginas",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando paginas _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponivel",
                "infoFiltered": "(filtrado de _MAX_ registros total)"
        }
        });
    } );
     </script>                   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    

</body>
</html>