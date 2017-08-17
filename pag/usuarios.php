<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post">
            <div class="modal-header bg-primary">
                <h4 class="modal-title"><i class="glyphicon glyphicon-user"></i> Cadastro de Usuários</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nome</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                        <input class="form-control" placeholder="Informe o Nome do Usuário" type="text" name="user_nome" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                        <input type="email" class="form-control" name="user_email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                        <input type="password" name="user_senha" class="form-control" placeholder="Senha" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-primary">
                <button name="cad_user" type="submit" class="btn btn-default"><i class="glyphicon glyphicon-envelope"></i> Cadastrar</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->