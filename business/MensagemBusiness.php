<?php
require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/MensagemDto.php");

/**
 * @author Wallace e Cia
 *
 */
class MensagemBusiness
{
    public $con;

    public function MensagemBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * <p> Função responsável por pesquisar todos os dados do aluno logado por qualquer campo. </p>
     * @param MensagemDto $alunoDto dto dos dados do aluno a ser consultado.
     * @return array json contando os dados do aluno logado.
     */
    public function find(MensagemDto $mensagemDto)
    {
        $query = "SELECT * FROM mensagem "
            . "WHERE `idMensagem` = '" . $mensagemDto->getIdMensagem() . "' ";


        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;

    }

    /**
     * Função responsável por executar a query e inserir novos alunos
     * @param MensagemDto $alunoDto dto dos dados do aluno que sera inserido na base de dados.
     * @return String json contendo a resposta do server após a inserção.
     */
    public function insert(MensagemDto $mensagemDto)
    {
        $query = "INSERT INTO `mensagem`"
            . " (`idMensagem`, `data`, `mensagem`,
                `email`, `telefone`, `nome`) "
            . "VALUES (NULL,"
            . "'".$mensagemDto->getIdMensagem()."', "
            . "'".$mensagemDto->getData()."', "
            . "'".$mensagemDto->getMensagem()."', "
            . "'".$mensagemDto->getEmail()."', "
            . "'".$mensagemDto->getTelefone()."', "
            . "'".$mensagemDto->getNome()."');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar o update de dados do aluno.
     * @param MensagemDto $alunoDto dto dos dados do aluno que sera alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update(MensagemDto $mensagemDto)
    {
        $query = "UPDATE `mensagem` SET "
            . " `data` = '". $mensagemDto->getData() ."'"
            . " `mensagem` = '". $mensagemDto->getMensagem() ."'"
            . " `email` = '". $mensagemDto->getEmail() ."'"
            . " `telefone` = '". $mensagemDto->getTelefone() ."'"
            . " `nome` = '". $mensagemDto->getNome() ."'"
            . "WHERE `idMensagem` = '". $mensagemDto->getIdMensagem()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por executar a query e realizar a contagem dos alunos ativos e inativos.
     * @param MensagemDto $alunoDto dto dos dados do aluno que sera apagado da base de dados.
     * @return String json contendo o número de alunos ativos e inativos.
     */
    public function delete(MensagemDto $mensagemDto)
    {
        $query = "DELETE FROM `mensagem` "
            . "WHERE `idMensagem` = '". $mensagemDto->getIdMensagem()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }


}

?>