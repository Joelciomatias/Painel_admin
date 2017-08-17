<?php

/**
 * Classe responsavel por fazer leituras no banco de dados
 *
 * @author XmdTecnologia
 */
class atualizar extends conecta {

    private $Update;
    private $Resultados;
    private $Up;
    private $Conecta;

    public function Query($Tabela, $Dados, $Termos) {
        $this->Update = "UPDATE {$Tabela} SET {$Dados} {$Termos}";
        $this->Conecta = parent::Conn();
        $this->Up = $this->Conecta->prepare($this->Update);
        $this->Up->setFetchMode(PDO::FETCH_ASSOC);

        try {
            $this->Up->execute();
            $this->Resultados = $this->Up->rowCount();
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
