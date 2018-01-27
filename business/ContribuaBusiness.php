<?php
require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/ContribuaDto.php");

/**
 * @author Wallace e Cia
 *
 */
class ContribuaBusiness
{
    public $con;

    public function ContribuaBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * <p> Função responsável por pesquisar todos os dados do aluno logado por qualquer campo. </p>
     * @param CidadeDto $alunoDto dto dos dados do aluno a ser consultado.
     * @return array json contando os dados do aluno logado.
     */
    public function find()
    {
          $query = "SELECT * FROM contribua ";



        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;

    }

    public function insert(ContribuaDto $contribuaDto)
    {
        $query = "INSERT INTO `contribua` (`ID_CONTRIBUA`, `CONTA`, `BANCO`, `AGENCIA`, `ID_PAYPAL`, `EMAIL_PAGSEGURO`, `LISTA_PRODUTOS`, `QUANTIDADE_PRODUTOS`) "
            . "VALUES (NULL,"
            . "'" . $contribuaDto->getConta() . "', "
            . "'" . $contribuaDto->getBanco() . "',"
            . "'" . $contribuaDto->getAgencia() . "',"
            . "'" . $contribuaDto->getIdPaypal() . "',"
            . "'" . $contribuaDto->getEmailPagseguro() . "',"
            . "'" . $contribuaDto->getListaProdutos() . "',"
            . "'" . $contribuaDto->getQuantidadeProdutos() . "');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }

    /**
     * Função responsável por executar a query e realizar o update de dados do aluno.
     * @param CidadeDto $alunoDto dto dos dados do aluno que sera alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update(ContribuaDto $contribuaDto)
    {
        $query = "UPDATE `contribua` SET "
            . " `CONTA` = '". $contribuaDto->getConta()."', "
            . " `BANCO` = '".$contribuaDto->getBanco()."', "
            . " `AGENCIA` = '".$contribuaDto->getAgencia()."', "
            . " `ID_PAYPAL` = '".$contribuaDto->getIdPaypal()."', "
            . " `EMAIL_PAGSEGURO` = '".$contribuaDto->getEmailPagseguro()."', "
            . " `LISTA_PRODUTOS` = '".$contribuaDto->getListaProdutos()."', "
            . " `QUANTIDADE_PRODUTOS` = '".$contribuaDto->getQuantidadeProdutos()."' "
            . "WHERE `ID_CONTRIBUA` = '". $contribuaDto->getIdContribua()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }

    public function delete(ContribuaDto $contribuaDto)
    {
        $query = "DELETE FROM `contribua` "
            . "WHERE `idContribua` = '".$contribuaDto->getIdContribua() ."'";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
