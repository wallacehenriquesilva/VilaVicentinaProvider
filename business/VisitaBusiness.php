<?php

require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/ComoVisitarDto.php");

/**
 * @author Wallace e Cia
 *
 */
class VisitaBusiness
{

    public $con;

    public function VisitaBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
    public function findAll()
    {
        $query = "SELECT * FROM como_visitar";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * * @param VisitaDto $publicacaoDto dto da publicação que sera pesquisada.
     * @return String json contando os dados do publicacao do usuário logado.
     */
    public function find()
    {
        $query = "SELECT * FROM como_visitar ";

        $rs = $this->con->getConnection()->query($query);
        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por inserir publicacoes.
     * @param VisitaDto $publicacaoDto dto da publicação que sera inserida.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(ComoVisitarDto $visitaDto)
    {
        $query = "INSERT INTO `como_visitar` (`data`,`endereco`, `resumo`,`horario_funcionamento`) "
            . "VALUES ('" . $visitaDto->getData() . "', "
            . "'" .$visitaDto->getResumo()."', "
            . "'" .$visitaDto->getEndereco()."', "
            . "'" .$visitaDto->getHorarioFuncionamento()."');";
        //return $visitaDto->getNome();
        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }

    /**
     * Função responsável por realizar o update dos dados da publicacao.
     * @param VisitaDto $publicacaoDto dto da publicação que sera atualizada.
     * @return string json contendo a resposta da solicitação de update da publicacao.
     */
    public function update(ComoVisitarDto $visitaDto)
    {
        $query = "UPDATE `como_visitar` SET  "
            . "`data` = '".$visitaDto->getData() ."', "
            . "`endereco` = '".$visitaDto->getEndereco() ."', "
            . "`resumo` = '".$visitaDto->getResumo() ."', "
            . "`horario_funcionamento` = '".$visitaDto->getHorarioFuncionamento() ."' "
            . "WHERE `id_visitar` = '1'; ";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }

    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param VisitaDto $publicacaoDto dto da publicação que sera apagada.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(ComoVisitarDto $visitaDto)
    {
        $query = "DELETE FROM `como_visitar` "
            . "WHERE `id_visitar` ='". $visitaDto->getIdVisita()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
