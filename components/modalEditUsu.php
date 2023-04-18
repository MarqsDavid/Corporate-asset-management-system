<?php include('../php/edit.php'); ?>
  <!-- ============ Modal Editar ================== -->
  <div class="modal" id="myModalEdit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" >
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label class="form-label required">Name</label>
                                <input class="form-control" type="text" name="firstname" placeholder="Digite o primeiro nome" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Sobrenome</label>
                                <input class="form-control" type="text" name="lastname" placeholder="Digite o sobrenome" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Digite o e-mail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Celular</label>
                                <input  class="form-control" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
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
                            <div class="mb-3">
                                <label class="form-label required">Senha</label>
                                <input class="form-control" type="password" name="password" placeholder="Digite a senha" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Confirme a Senha</label>
                                <input class="form-control" type="password" name="confirmPassword" placeholder="Digite a senha novamente" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Data de Craição</label>
                                <input class="form-control" type="date" name="creation-date">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="update" id="update" class="btn btn-primary">Alterar</button>
                                <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Cancela</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>