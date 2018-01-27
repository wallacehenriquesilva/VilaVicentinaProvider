<?php
require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/ServicosDto.php");

/**
 * @author Wallace e Cia
 *
 */
class ServicoBusiness
{
    public $con;

    public function ServicoBusiness()
    {
        $this->con = new Factory();
    }


    public function find(ServicosDto $servicosDto)
    {
        $query = "SELECT * FROM servicos ";


        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;

    }

    /**
     * Função responsável por executar a query e inserir novos alunos
     * @param ServicosDto $alunoDto dto dos dados do aluno que sera inserido na base de dados.
     * @return String json contendo a resposta do server após a inserção.
     */
    public function insert(ServicosDto $servicosDto)
    {
        $query = "INSERT INTO `servicos`"
            . " (`ID_SERVICOS`, `TITULO`, `DESCRICAO`, `VALOR`) "
            . "VALUES (NULL,"
            . "'".$servicosDto->getTitulo()."', "
            . "'".$servicosDto->getDescricao()."', "
            . "'".$servicosDto->getValor()."');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar o update de dados do aluno.
     * @param ServicosDto $alunoDto dto dos dados do aluno que sera alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update(ServicosDto $servicosDto)
    {
        $query = "UPDATE `servicos` SET "
            . " `TITULO` = '". $servicosDto->getTitulo() ."', "
            . " `DESCRICAO` = '". $servicosDto->getDescricao() ."', "
            . " `VALOR` = '". $servicosDto->getValor() ."' "
            . "WHERE `ID_SERVICOS` = '". $servicosDto->getIdServicos()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar a contagem dos alunos ativos e inativos.
     * @param ServicosDto $alunoDto dto dos dados do aluno que sera apagado da base de dados.
     * @return String json contendo o número de alunos ativos e inativos.
     */
    public function delete(ServicosDto $servicosDto)
    {
        $query = "DELETE FROM `servicos` "
            . "WHERE `ID_SERVICOS` = '". $servicosDto->getIdServicos()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;

    }
}

?>
