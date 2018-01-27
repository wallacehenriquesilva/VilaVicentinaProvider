<?php

require_once("util/Factory.php");
require_once("model/HistoriaDto.php");

/**
 * @author Wallace e Cia
 *
 */
class HistoriaBusiness
{

    public $con;


    /**
     * Método construtor da classe CursoBusiness
     * responsável por realizar a conexão com o BD.
     */
    public function HistoriaBusiness()
    {
        $this->con = new Factory();
    }

  /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */

    public function find()
    {
        $query = "SELECT * FROM historia ";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }


    /**
     * Função responsável por inserir cursos.
     * @param EstadoDto $cursoDto dto do curso que será inserido na base de dados.
     * @return String json contendo a resposta da solicitação de inserção de curso.
     */
    public function insert(HistoriaDto $historiaDto)
    {
        $query = "INSERT INTO `historia` (`ID_HISTORIA`, `HISTORIA`) "
            . "VALUES (NULL,"
            . " '" . $historiaDto->getHistoria() . "');";

        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }

    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param EstadoDto $cursoDto dto do curso que será alterado na base de dados.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update(HistoriaDto $historiaDto)
    {
        $query = "UPDATE `historia` SET  "
            . "`HISTORIA` = '" . $historiaDto->getHistoria() . "' "
            . "WHERE `ID_HISTORIA` = '" . $historiaDto->getIdHistoria() . "';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por realizar a exclusão de um curso.
     * @param EstadoDto $cursoDto dto do curso que será apagado da base de dados.
     * @return String json contendo a resposta da solicitação de exclusão de curso.
     */
    public function delete(HistoriaDto $historiaDto)
    {
        $query = "DELETE FROM `historia`"
            . " WHERE `idHistoria` = '" . $historiaDto->getIdHistoria() . "';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
