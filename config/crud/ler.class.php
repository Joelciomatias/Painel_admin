<?php

/**
 * Classe responsavel por fazer leituras no banco de dados
 *
 * @author XmdTecnologia
 */
class ler extends conecta {

    private $Select;
    private $Resultados;
    private $Ler;
    private $Conecta;

    public function Query($Tabela, $Termos = null) {
        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        $this->Conecta = parent::Conn();
        $this->Ler = $this->Conecta->prepare($this->Select);
        $this->Ler->setFetchMode(PDO::FETCH_ASSOC);

        try {
            $this->Ler->execute();
            $this->Resultados = $this->Ler->fetchAll();
        } catch (PDOException $e) {
            $this->Resultados = null;
            echo $e->getMessage();
        }
    }

    /* Retorna os Resultados em Array */

    public function getResultados() {
        return $this->Resultados;
    }

}
