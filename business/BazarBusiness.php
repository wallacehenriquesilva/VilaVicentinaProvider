<?php
require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/BazarDto.php");

/**
 * @author Wallace e Cia
 *
 */
class BazarBusiness
{
    public $con;

    public function BazarBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * <p> Função responsável por pesquisar todos os dados do aluno logado por qualquer campo. </p>
     * @param BazarDto $alunoDto dto dos dados do aluno a ser consultado.
     * @return array json contando os dados do aluno logado.
     */
    public function find()
    {
        $query = "SELECT * FROM bazar ";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;

    }

    /**
     * Função responsável por executar a query e inserir novos alunos
     * @param BazarDto $alunoDto dto dos dados do aluno que sera inserido na base de dados.
     * @return String json contendo a resposta do server após a inserção.
     */
    public function insert(BazarDto $bazarDto)
    {
        $query = "INSERT INTO `bazar`"
            . " (`ID_BAZAR`, `HORARIO_FUNCIONAMENTO`, `TELEFONE`, `FACEBOOK`, `PRODUTO`, `QUANTIDADE`, `PRECO`, `NOME_ARQUIVO`) "
            . "VALUES (NULL,"
            . "'".$bazarDto->getHorarioFuncionamento()."', "
            . "'".$bazarDto->getTelefone()."', "
            . "'".$bazarDto->getFacebook()."', "
            . "'".$bazarDto->getProduto()."', "
            . "'".$bazarDto->getQuantidade()."', "
            . "'".$bazarDto->getPreco()."', "
            . "'".$bazarDto->getNomeArquivo()."');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar o update de dados do aluno.
     * @param BazarDto $alunoDto dto dos dados do aluno que sera alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update(BazarDto $bazarDto)
    {
        $query = "UPDATE `bazar` SET "
            . " `HORARIO_FUNCIONAMENTO` = '". $bazarDto->getHorarioFuncionamento() ."', "
            . " `TELEFONE` = '". $bazarDto->getTelefone() ."', "
            . " `FACEBOOK` = '". $bazarDto->getFacebook() ."', "
            . " `PRODUTO` = '". $bazarDto->getProduto() ."', "
            . " `QUANTIDADE` = '". $bazarDto->getQuantidade() ."', "
            . " `PRECO` = '". $bazarDto->getPreco() ."', "
            . " `NOME_ARQUIVO` = '". $bazarDto->getNomeArquivo() ."' "
            . "WHERE `ID_BAZAR` = '". $bazarDto->getIdBazar()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar a contagem dos alunos ativos e inativos.
     * @param BazarDto $alunoDto dto dos dados do aluno que sera apagado da base de dados.
     * @return String json contendo o número de alunos ativos e inativos.
     */
    public function delete(BazarDto $bazarDto)
    {
        $query = "DELETE FROM `bazar` "
            . "WHERE `ID_BAZAR` = '". $bazarDto->getIdBazar()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }

}

?>
