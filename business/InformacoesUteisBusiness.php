<?php

require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/InformacoesUteisDto.php");

/**
 * @author Wallace e Cia
 *
 */
class InformacoesUteisBusiness
{

    public $con;

    /**
     * Método construtor da classe e realiza a conexão com o BD
     */
    public function InformacoesUteisBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Função responsável por pesquisar as publicações do aluno logado.
     * @param TipoDto $publicacaoDto dto da publicação que sera pesquisada.
     * @return String json contando os dados do publicacao do aluno logado.
     */
    public function find(InformacoesUteisDto $informacoesUteisDto)
    {

        $query = "SELECT * FROM informacao ";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }


    /**
     * Função responsável por inserir publicacoes do aluno.
     * @param TipoDto $publicacaoDto dto da publicação que sera inserida.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(InformacoesUteisDto $informacoesUteisDto)
    {
        $query = "INSERT INTO `informacao` (`ID_INFORMACAO`, `INFORMACAO`, `TELEFONE`) "
            . "VALUES (NULL,"
            . "'" . $informacoesUteisDto->getInformacao() . "', "
            . "'" . $informacoesUteisDto->getTelefone() . "');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por realizar o update dos dados da publicacao do aluno.
     * @param TipoDto $publicacaoDto dto da publicação que sera atualizada.
     * @return string json contendo a resposta da solicitação de update da publicacao.
     */
    public function update(InformacoesUteisDto $informacoesUteisDto)
    {
         $query = "UPDATE `informacao` SET "
            . " `INFORMACAO` = '". $informacoesUteisDto->getInformacao() ."', "
            . " `TELEFONE` = '". $informacoesUteisDto->getTelefone() ."' "
            . "WHERE `ID_INFORMACAO` = '". $informacoesUteisDto->getIdInformacao()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsávle por realizar a exclusão da publicação do aluno.
     * @param TipoDto $publicacaoDto dto da publicação que sera apagada.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(InformacoesUteisDto $informacoesUteisDto)
    {
       $query = "DELETE FROM `informacao` "
            . "WHERE `ID_INFORMACAO` = '". $informacoesUteisDto->getIdInformacao()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
