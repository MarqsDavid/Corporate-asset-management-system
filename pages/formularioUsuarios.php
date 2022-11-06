<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formularioUsuarios.css">
    <title>Cadastro de Usuarios</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../img/undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form" >
            <form action="../php/inserirUsuario.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Usuarios</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="../pages/gerenciadorUsuarios.php">Voltar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite o primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite o sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite a senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirme a Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite a senha novamente" required>
                    </div>

                
                </div>


                <div class="gender-inputs">
                    <div class="gender-group">
                        <div class="gender-input">
                            <p>
                            <label for="cEst">Gênero:</label>
                                <select name="gender" id="cEst">
                                    <optgroup>
                                        <option >Feminino</option>
                                        <option >Masculino</option>
                                    </optgroup>
                                </select>
                            </p> 
                        </div>
                    </div>
                </div>
                
                <div class="gender-inputs">
                    <div class="gender-group">
                        <div class="gender-input">
                            <p>
                            <label for="cEst">Tipo de Usuario:</label>
                                <select name="usu-taype" id="cEst">
                                    <optgroup>
                                        <option >Administrador</option>
                                        <option >Usuário</option>
                                    </optgroup>
                                </select>
                            </p> 
                        </div>
                    </div>
                </div>

                <br>

                <div class="creation-date">
                    <label for="creation-date"><b>Data de Criação:</b></label>
                    <input type="date" name="creation-date"  required>
                </div>
                
                <div class="continue-button">
                    <button><a>Cadastra</a></button>
                </div>
            </form>
            
        </div>
    </div>
</body>

</html>