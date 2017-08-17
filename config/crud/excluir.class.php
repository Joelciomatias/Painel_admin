<?php

/**
 * Classe responsavel por fazer leituras no banco de dados
 *
 * @author XmdTecnologia
 */
class excluir extends conecta {

    private $Delete;
    private $Resultados;
    private $Del;
    private $Conecta;

    public function Query($Tabela, $Termos) {
        $this->Delete = "DELETE FROM {$Tabela} {$Termos}";
        $this->Conecta = parent::Conn();
        $this->Del = $this->Conecta->prepare($this->Delete);
        $this->Del->setFetchMode(PDO::FETCH_ASSOC);

        try {
            $this->Del->execute();
            $this->Resultados = $this->Del->rowCount();
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
