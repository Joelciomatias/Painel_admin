<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header bg-primary">
            <h4 class="modal-title"><i class="glyphicon glyphicon-off"></i> <?= TITULO ?></h4>
        </div>
        <form method="post">
            <div class="modal-body">
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input class="form-control" type="email" name="user_email"/>
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input class="form-control" type="password" name="user_senha"/>
                </div>
            </div>
            <div class="modal-footer">
                <button name="EfetuarLogin" class="btn btn-primary btn-lg btn-block"><i class="glyphicon glyphicon-log-in"></i> Efetuar Login</button>

            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
