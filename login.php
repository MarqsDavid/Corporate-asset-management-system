<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css"/>
    <link rel="stylesheet" href="./css/modal.css"/>
    <title>Sign in</title>
  </head>
  <body>


    <div class="modal-container">
        <div class="modal">
          <div id="login">
            <div class="box">
            <div class="btns">
            <button class="btnClose" onclick="closeModal()">X</button>
            </div>
            <br>
            <form action="../MySystem/php/logaAdmin.php" method="POST">
                <h1 id="text-admin">Login adm<b>in</b></h1>
                <br>
                <div class="email">
                    <input type="username" name="username" placeholder="Usuário">
                </div>
                <div class="senha">
                    <input type="password" name="passwordAdmin" placeholder="Senha">
                </div>
                <br>
                <div class="entrar">
                    <input type="submit" name="submit" value="Entrar">
                </div>
              </form>    
            </div>
        </div>
      </div>
    </div>
    <script src="./js/modal.js"></script>




    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../MySystem/php/loga.php" method="POST" class="sign-in-form">
            <h1 class="title01">Bem vindos ao <b>Login</b></h1>
            <h2 class="title">Preencha os dados do login para acessar</h2>
            <br>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="email" placeholder="Email" />
                <div class="underline"></div>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="senha" placeholder="Senha" />
                <div class="underline"></div>
              </div>
            <input type="submit" name="submit" value="Entra" class="btn solid" />
            <p class="social-text">Logar como <span class="btnOpenModal" onclick="openModal()">Administrador</span></p>
      </div>


    <div class="panels-container">
        <div class="panel left-panel">
        <div class="content">
            <img src="./img/register.svg" class="image" alt="" />
      </div>
      
  </body>
</html>
