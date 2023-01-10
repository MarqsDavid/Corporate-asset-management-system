<?php include('../php/sessao.php')?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js">
    <!----======== CSS e BOOS ======== -->
    
    
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <title>Home</title> 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- ========================================================= -->




</head>
<body>
    <?php include("../components/nav.php"); ?>
    <section class="home">
    <div class="text">Home</div>
        
     
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table data_table ">
                    <table id="example" class="table table-striped table-bordered shadow-lg p-3 mb-5 bg-white rounded-bottom">
                        <thead class="p-3 mb-2 bg-primary text-white border border-primary">
                        <tr>       
                            <th>Descrição</th>
                            <th>Nº Patrimônio</th>
                            <th>Nº Localização</th>
                            <th>Responsável</th>    
                            <th>Data de Criação</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)) {
                                
                                echo "<tr>";
                                
                                echo "<td>".$user_data['descricao']."</td>";
                                echo "<td>".$user_data['numeroPatrimonio']."</td>";
                                echo "<td>".$user_data['numeroLocalizacao']."</td>";
                                echo "<td>".$user_data['responsavel']."</td>";  
                                echo "<td>".$user_data['dataCriacao']."</td>";
                     
                            
                                echo "</tr>";

                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

     
   </section>
</body>
<script src="../js/search.js"></script>



</html>