<?php

require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/TransparenciaDto.php");

/**
 * @author Wallace e Cia
 *
 */
class TransparenciaBusiness
{

    public $con;

    public function TransparenciaBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
   /**
     * <p> Função responsável por pesquisar todos os dados do aluno logado por qualquer campo. </p>
     * @param TransparenciaDto $alunoDto dto dos dados do aluno a ser consultado.
     * @return array json contando os dados do aluno logado.
     */
    public function find(TransparenciaDto $transparenciaDto)
    {
        $query = "SELECT * FROM transparencia ";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;

    }

    /**
     * Função responsável por executar a query e inserir novos alunos
     * @param TransparenciaDto $alunoDto dto dos dados do aluno que sera inserido na base de dados.
     * @return String json contendo a resposta do server após a inserção.
     */
    public function insert(TransparenciaDto $transparenciaDto)
    {
        $query = "INSERT INTO `transparencia`"
            . " (`ID`, `DATA`, `VALOR`, `NOME_ARQUIVO`) "
            . "VALUES (NULL,"
            . "'".$transparenciaDto->getData()."', "
            . "'".$transparenciaDto->getValor()."', "
            . "'".$transparenciaDto->getNomeArquivo()."');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar o update de dados do aluno.
     * @param TransparenciaDto $alunoDto dto dos dados do aluno que sera alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update(TransparenciaDto $transparenciaDto)
    {
        $query = "UPDATE `transparencia` SET "
            . " `DATA` = '". $transparenciaDto->getData() ."', "
            . " `VALOR` = '". $transparenciaDto->getValor() ."', "
            . " `NOME_ARQUIVO` = '". $transparenciaDto->getNomeArquivo() ."'"
            . "WHERE `ID` = '". $transparenciaDto->getIdTransparencia()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar a contagem dos alunos ativos e inativos.
     * @param TransparenciaDto $alunoDto dto dos dados do aluno que sera apagado da base de dados.
     * @return String json contendo o número de alunos ativos e inativos.
     */
    public function delete(TransparenciaDto $transparenciaDto)
    {
        $query = "DELETE FROM `transparencia` "
            . "WHERE `ID` = '". $transparenciaDto->getIdTransparencia()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
