<?php

session_start();
/* ENDEREÇO DO SITE */
define('BASE', "http://localhost/paineladmin.com.br");
/* FRANQUIA DO SITE */
define('TITULO', 'Painel Administrativo');
/* CONEXÃO COM BANCO DE DADOS */
define('USUARIO', 'root');
define('SENHA', 'root');
define('BANCO_DE_DADOS', 'curso_xmd');
define('LOCAL', 'localhost');
/* AUTOLOAD DE CLASSE */

function __autoload($Classe) {
    require __DIR__ . '/crud/' . $Classe . '.class.php';
}

/* FILTRAR POST */
$Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
/* FILTRAR POST */
$Get = filter_input_array(INPUT_GET, FILTER_DEFAULT);
/* EFETUAR LOGIN */
if (isset($_SESSION['login'])):
    $userlogin['user_email'] = $_SESSION['login']['user_email'];
    $userlogin['user_senha'] = $_SESSION['login']['user_senha'];
endif;