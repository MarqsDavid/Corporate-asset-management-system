<?php include('../php/sessao.php')?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js">
    <!----======== CSS e BOOS ======== -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <title>Home</title> 
</head>
<body>
    <?php include("../components/nav.php"); ?>
    <section class="home">
        <div class="text">Home</div>

        <div class="container">
        <div class="row">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Patrimonio</th>
                        <th>Localização</th>
                        <th>Usuario</th>
                        <th>Data de Craição</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        
                        echo "<tr>";
                        
                        echo "<td>".$user_data['marca']."</td>";
                        echo "<td>".$user_data['tipo']."</td>";
                        echo "<td>".$user_data['modelo']."</td>";
                        echo "<td>".$user_data['patrimonio']."</td>";
                        echo "<td>".$user_data['localizacao']."</td>";
                        echo "<td>".$user_data['usuario']."</td>";
                        echo "<td>".$user_data['dataCriacao']."</td>";
                        
                        echo "<td>
                        <a class='btn btn-sm btn-primary' data-bs-toggle='modal' href='#'id=$user_data[id] title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='../php/deletPatrimonio.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";

                    }
                    ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>Patrimonio</th>
                        <th>Localização</th>
                        <th>Usuario</th>
                        <th>Data de Craição</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </section>
   


</body>
</html>