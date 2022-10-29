<?php include('../php/sessao.php')?>
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="../img/D Logo.png" alt="">
            </span>

            <div class="text logo-text">
                <span class="name">   <?php
                    echo "$logado";
                ?></span>
                <span class="profession"></span>

            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-home-alt icon' ></i>
                        <span class="text nav-text">Inicio</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-clipboard icon' ></i>
                        <span class="text nav-text">Relatorio</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-duplicate icon'></i>
                        <span class="text nav-text">Criar Local</span>
                    </a>
                </li>

         
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="../php/sai.php">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Sai</span>
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Modo escuro</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
            
        </div>
    </div>

</nav>

<section class="home">
    <div class="text">Home</div>
</section>
<!----===== Boxicons CSS ===== -->
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/nav.css">
