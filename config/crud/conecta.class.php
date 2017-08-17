<?php

/**
 * Description of conecta responsavel por fazer a conexão com banco de dados
 *
 * @author XmdTecnologia
 */
class conecta {

    private static $USUARIO;
    private static $SENHA;
    private static $BANCO_DE_DADOS;
    private static $LOCAL;
    /* CONEXÃO UNICA */
    private static $SINGLETON;

    function __construct() {
        self::$USUARIO = USUARIO;
        self::$SENHA = SENHA;
        self::$BANCO_DE_DADOS = BANCO_DE_DADOS;
        self::$LOCAL = LOCAL;
    }

    public static function Conn() {
        if (!isset(self::$SINGLETON)):
            $dsn = "mysql:host=" . self::$LOCAL . ";dbname=" . self::$BANCO_DE_DADOS . ";";
            self::$SINGLETON = new PDO($dsn, self::$USUARIO, self::$SENHA);
        endif;
        return self::$SINGLETON;
    }

}
