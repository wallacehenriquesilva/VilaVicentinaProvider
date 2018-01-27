<?php

require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/SobreDto.php");

/**
 * @author Wallace e Cia
 *
 */
class SobreBusiness
{

    public $con;

    public function SobreBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
    public function findAll()
    {
        $query = "SELECT * FROM sobre";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * * @param SobreDto $publicacaoDto dto da publicação que sera pesquisada.
     * @return String json contando os dados do publicacao do usuário logado.
     */
    public function find(SobreDto $sobreDto)
    {
        $query = "SELECT * FROM sobre "
            . "WHERE idSobre = '" . $sobreDto->getIdSobre() . "';";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por inserir publicacoes.
     * @param SobreDto $publicacaoDto dto da publicação que sera inserida.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(SobreDto $sobreDto)
    {
        $query = "INSERT INTO `sobre` (`nome`) "
            . "VALUES ('" . $sobreDto->getNome() . "'); ";
        //return $sobreDto->getNome();
        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }

    /**
     * Função responsável por realizar o update dos dados da publicacao.
     * @param SobreDto $publicacaoDto dto da publicação que sera atualizada.
     * @return string json contendo a resposta da solicitação de update da publicacao.
     */
    public function update(SobreDto $sobreDto)
    {
        $query = "UPDATE `sobre` SET  "
            . "`nome` = $sobreDto->getNome() "
            . "WHERE `idSobre` = $sobreDto->getIdSobre(); ";


        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }

    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param SobreDto $publicacaoDto dto da publicação que sera apagada.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(SobreDto $sobreDto)
    {
        $query = "DELETE FROM `sobre` "
            . "WHERE `idSobre` = $sobreDto->getIdSobre();";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
