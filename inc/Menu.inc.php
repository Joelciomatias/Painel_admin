<div class="row">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Painel Admin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= BASE ?>/index.php?pag=usuarios"><i class="glyphicon glyphicon-user"></i> Usuários <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book"></i> Paginas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= BASE ?>/index.php?pag=home"><i class="glyphicon glyphicon-home"></i> Inicial</a></li>
                            <li><a href="<?= BASE ?>/index.php?pag=sobre"><i class="glyphicon glyphicon-file"></i> Quem Somos</a></li>
                            <li><a href="<?= BASE ?>/index.php?pag=portifolio"><i class="glyphicon glyphicon-file"></i> Portifolio</a></li>
                            <li><a href="<?= BASE ?>/index.php?pag=contato"><i class="glyphicon glyphicon-phone"></i> Contato</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i> Config <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="glyphicon glyphicon-pencil"></i> Minha Conta</a></li>
                            <li><a href="<?= BASE ?>/index.php?pag=sair"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>