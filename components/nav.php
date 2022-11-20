<?php include('../php/sessao.php')?>
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <div class="text logo-text">
                <span class="name"><?php echo "$logado";?></span>
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

         

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-clipboard icon' ></i>
                        <span class="text nav-text">Relatorio</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a  data-bs-toggle='modal' href="#myModal">
                        <i class='bx bx-duplicate icon'></i>
                        <span class="text nav-text">Adicionar</span>
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

<!----======== PDF ======== -->

<!----===== Boxicons CSS ===== -->
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script src="../js/nav.js"></script>
<link rel="stylesheet" href="../css/nav.css">

<!----===== Modal Adicionar ===== -->

<div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../php/inserirPatrimonios.php" method="POST" >
                            <?php include('../php/edit.php'); ?>
                            <input type="hidden" name="id" value="<?php echo $id?>">
                            <div class="mb-3">
                                <label class="form-label required">Descrição</label>
                                <input class="form-control" type="text" name="description" placeholder="Digite a Descrição" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Nº Patrimônio</label>
                                <input class="form-control" type="number" name="patrimony" placeholder="Digite o Patrimônio" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Nº Localização</label>
                                <input class="form-control" type="number" name="location" placeholder="Digite a Localização" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Responsável</label>
                                <input class="form-control" type="text" name="user" placeholder="Digite o Responsável" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Data de Craição</label>
                                <input class="form-control" type="date" name="creation-date">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="submit" id="update" class="btn btn-primary">Adicionar</button>
                                <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Cancela</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>