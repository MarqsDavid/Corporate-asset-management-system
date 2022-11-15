<?php include('../php/sessao.php')?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                        <td>$320,800</td>
                    </tr>
                    
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
                        
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </section>
   


</body>
</html>