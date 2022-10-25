<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gerenUsu.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Gerenciamento de Usuários</title>
</head>
<body>
    <div class="grid-container">
        <div class="header">
            <figure>
                <img src="../icons/icone-engrenagem.png" alt=""width="40" height="40">
            </firgure>
            <nav>
                 
                <div class="nav-user">USUARIOS</div>
                <div class="nav-add"><a href="addUsu.html">ADICIONAR</a></div>

            </nav>
        </div>

        <div class="exit">
            <div class="box">
                <div class="icon exit" >
                    <ion-icon name="exit"></ion-icon>
                </div>
                <a href="login.html">Sai</a>
            </div>
            
        </div>

        <div class="main">
            <div id="conteudo">
                <div id="top">
                    <a href="#">Tipos<br><span id="types">Todos &nbsp;▼</span></a>
                </div>

                <div id="line"></div>

                <div id="table-1">
                    <table>
                        <thead>
                            <tr>

                                <th colspan="3" class="table-id">Id</th>
                                <th class='table-name'>Nome</th>
                                <th class='table-sobrenome'>Sobrenome</th>
                                <th class='table-email'>E-mail</th>
                                <th class='table-phone'>Telefone</th>
                                <th class='table-date'>Criado em</th>
                                <th class='table-admin'>Admin</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-blue"></td>
                                <td class="table-id">1</td>
                                <td class='table-icon'><img src="../icons/icon2.jpg" alt="icone"></td>
                                <td class='table-name'>David</td>
                                <td class='table-sobrenome'>Marques Mega de Sousa</td>
                                <td class='table-email'>teste.teste@gmail.com</td>
                                <td class='table-phone'>11 999991234</td>
                                <td class='table-date'>23/06/2021 11:16</td>
                                <td class='table-admin'>Não</td>

                                <td class='table-actions'><button class="btn-edit">editar</button></td>
                                <td class='table-actions'><button class="btn-delete">deletar</button></td>
                                <td class="coluna-ultimas-cinco">
                                </td>  
                                <td class="coluna-bordas"></td>
                            </tr>

                            <tr>
                                <td class="border-green"></td>
                                <td class="table-id">2</td>
                                <td class='table-icon'><img src="../icons/icon4.jpg" alt="icone"></td>
                                <td class='table-name'>Alan</td>
                                <td class='table-sobrenome'>Marques Mega de Sousa</td>
                                <td class='table-email'>teste@gmail.com</td>
                                <td class='table-phone'>11 992977850</td>
                                <td class='table-date'>23/06/2022 12:16</td>
                                <td class='table-admin'>sim</td>

                                <td class='table-actions'><button class="btn-edit">editar</button></td>
                                <td class='table-actions'><button class="btn-delete">deletar</button></td>
                                <td class="coluna-ultimas-cinco">
                                </td>  
                                <td class="coluna-bordas"></td>
                            <tr>

               
    </div>   
</body>
</html>