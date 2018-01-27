<?php
require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/CentroDiaDto.php");

/**
 * @author Wallace e Cia
 *
 */
class CentroDiaBusiness
{
    public $con;

    public function CentroDiaBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * <p> Função responsável por pesquisar todos os dados do aluno logado por qualquer campo. </p>
     * @param CentroDiaDto $alunoDto dto dos dados do aluno a ser consultado.
     * @return array json contando os dados do aluno logado.
     */
    public function find(CentroDiaDto $centroDiaDto)
    {
        $query = "SELECT * FROM centro_dia ";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;

    }

    /**
     * Função responsável por executar a query e inserir novos alunos
     * @param CentroDiaDto $alunoDto dto dos dados do aluno que sera inserido na base de dados.
     * @return String json contendo a resposta do server após a inserção.
     */
    public function insert(CentroDiaDto $centroDiaDto)
    {
        $query = "INSERT INTO centro_dia"
            . " (`ID_CENTRO`, `RESUMO`) "
            . "VALUES (NULL,"
            . "'".$centroDiaDto->getResumo()."');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar o update de dados do aluno.
     * @param CentroDiaDto $alunoDto dto dos dados do aluno que sera alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update(CentroDiaDto $centroDiaDto)
    {
        $query = "UPDATE `centro_dia` SET "
            . " `RESUMO` = '".$centroDiaDto->getResumo()."' "
            . "WHERE `ID_CENTRO` ='". $centroDiaDto->getIdCentro()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar a contagem dos alunos ativos e inativos.
     * @param CentroDiaDto $alunoDto dto dos dados do aluno que sera apagado da base de dados.
     * @return String json contendo o número de alunos ativos e inativos.
     */
    public function delete(CentroDiaDto $centroDiaDto)
    {
        $query = "DELETE FROM `centroDia` "
            . "WHERE `idCentroDia` = '".$centroDiaDto->getIdCentroDia()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }

}

?>
