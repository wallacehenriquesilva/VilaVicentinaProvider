<?php

require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/VoluntariosDto.php");

/**
 * @author Wallace e Cia
 *
 */
class VoluntariosBusiness
{

    public $con;

    public function VoluntariosBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
    public function findAll()
    {
        $query = "SELECT * FROM voluntarios";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * * @param VoluntariosDto $publicacaoDto dto da publicação que sera pesquisada.
     * @return String json contando os dados do publicacao do usuário logado.
     */
    public function find(VoluntariosDto $voluntariosDto)
    {
        $query = "SELECT * FROM voluntarios "
            . "WHERE idVoluntarios = '" . $voluntariosDto->getIdVoluntarios() . "';";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por inserir publicacoes.
     * @param VoluntariosDto $publicacaoDto dto da publicação que sera inserida.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(VoluntariosDto $voluntariosDto)
    {
        $query = "INSERT INTO `voluntarios` (`NOME_VOLUNTARIO`, `ATIVIDADE_VOLUNTARIO`, `TELEFONE_VOLUNTARIOS`,`DISPONIBILIDADE`) "
            . "VALUES ('" . $voluntariosDto->getNomeVoluntarios() . "', "
            . "'" . $voluntariosDto->getAtividadeVoluntarios() . "',"
            . "'" . $voluntariosDto->getTelefoneVoluntarios() . "', "
            . "'" . $voluntariosDto->getDisponibilidade() . "')";

        //return $voluntariosDto->getNome();
        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }

    /**
     * Função responsável por realizar o update dos dados da publicacao.
     * @param VoluntariosDto $publicacaoDto dto da publicação que sera atualizada.
     * @return string json contendo a resposta da solicitação de update da publicacao.
     */
    public function update(VoluntariosDto $voluntariosDto)
    {
        $query = "UPDATE `voluntarios` SET  "
            . "`NOME_VOLUNTARIO` = '". $voluntariosDto->getNomeVoluntarios() ."', "
            . "`ATIVIDADE_VOLUNTARIO` = '". $voluntariosDto->getAtividadeVoluntarios() ."', "
            . "`TELEFONE_VOLUNTARIOS` = '". $voluntariosDto->getTelefoneVoluntarios() ."', "
            . "`DISPONIBILIDADE` = '". $voluntariosDto->getDisponibilidade(). "' "
            . "WHERE `ID_VOLUNTARIOS` = '". $voluntariosDto->getIdVoluntarios() . "';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }

    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param VoluntariosDto $publicacaoDto dto da publicação que sera apagada.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(VoluntariosDto $voluntariosDto)
    {
        $query = "DELETE FROM `voluntarios` "
            . "WHERE `ID_VOLUNTARIOS` = '" .$voluntariosDto->getIdVoluntarios()."';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
