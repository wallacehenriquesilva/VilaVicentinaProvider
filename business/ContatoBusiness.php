<?php

require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/ContatoDto.php");

/**
 * @author Wallace e Cia
 *
 */
class ContatoBusiness
{

    public $con;

    /**
     * Método construtor da classe e realiza a conexão com o BD
     */
    public function ContatoBusiness()
    {
        $this->con = new Factory();
    }


    /**
     * Função responsável por pesquisar as publicações do aluno logado.
     * @param TipoDto $publicacaoDto dto da publicação que sera pesquisada.
     * @return String json contando os dados do publicacao do aluno logado.
     */
    public function find(ContatoDto $contatoDto)
    {

        $query = "SELECT * FROM contato ";



        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }


    /**
     * Função responsável por inserir publicacoes do aluno.
     * @param TipoDto $publicacaoDto dto da publicação que sera inserida.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(ContatoDto $contatoDto)
    {
        $query = "INSERT INTO `contato` (`idContato`, `telefone`, `facebook`, `email`) "
            . "VALUES (NULL,"
            . " " . $contatoDto->getIdContato() . ", "
            . "'" . $contatoDto->getTelefone() . "', "
            . "'" . $contatoDto->getFacebook() . "',"
            . "'" . $contatoDto->getEmail() . "');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }


    /**
     * Função responsável por realizar o update dos dados da publicacao do aluno.
     * @param TipoDto $publicacaoDto dto da publicação que sera atualizada.
     * @return string json contendo a resposta da solicitação de update da publicacao.
     */
    public function update(ContatoDto $contatoDto)
    {
        $query = "UPDATE `contato` SET "
            . " `TELEFONE` = '". $contatoDto->getTelefone() ."', "
            . " `FACEBOOK` = '". $contatoDto->getFacebook() ."', "
            . " `EMAIL` = '". $contatoDto->getEmail() ."'"
            . "WHERE `ID_CONTATO` = '". $contatoDto->getIdContato()."';";


        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsávle por realizar a exclusão da publicação do aluno.
     * @param TipoDto $publicacaoDto dto da publicação que sera apagada.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(ContatoDto $contatoDto)
    {
        $query = "DELETE FROM `contato` "
            . "WHERE `idContato` = '".$contatoDto->getIdContato() ."'";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
