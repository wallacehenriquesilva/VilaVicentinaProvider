<?php
require 'vendor/autoload.php';
require_once("util/Factory.php");
require_once("model/HomeDto.php");

/**
 * @author Wallace e Cia
 *
 */
class HomeBusiness
{

    public $con;

    /**
     * Método construtor da classe que setta o valor da orientadorBusiness.
     * e realiza a conexão com o BD.
     */
    public function HomeBusiness()
    {
        $this->con = new Factory();
    }


    /**
     * Pesquisa todos os Orientadores
     * @param UsuarioDto $orientadorDto dto do orientador a ser pesquisado.
     * @return String json contendo os Orientadores
     */
    public function find(HomeDto $homeDto)
    {
        $query = "SELECT * FROM home ";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por inserir um orientador.
     * @param UsuarioDto $orientadorDto dto do orientador que sera inserido na base.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(HomeDto $homeDto)
    {
        $query = "INSERT INTO `home` "
            . "(`idHome`, `titulo`, `bio`) "
            . "VALUES (NULL,"
            . "'".$homeDto->getIdHome()."', "
            . "'".$homeDto->getTitulo()."', "
            . "'".$homeDto->getBio()."');";

        $stmt = $this->con->getConnection()->prepare($query);
        $collection = $stmt->execute();
        return $collection;
    }


    /**
     * Função responsável por realizar o update de dados do aluno.
     * @param UsuarioDto $orientadorDto dto do orientador que sera alterado na base.
     * @return string json contendo a resposta da solicitação de update do aluno.
     */
    public function update(HomeDto $homeDto)
    {
        $query = "UPDATE `home` SET  "
            . "`TITULO` = '" . $homeDto->getTitulo() . "',"
            . "`BIO` = '" . $homeDto->getBio() . "' "
            . "WHERE `ID_HOME` = '" . $homeDto->getIdHome() . "';";


        $rs = $this->con->getConnection()->prepare($query);
        $collection = $rs->execute();

        return $collection;
    }

    /**
     * Função responsável por excluir um orientador.
     * @param UsuarioDto $orientadorDto dto do orientador que sera apagado da base.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(HomeDto $homeDto)
    {
        $query = "DELETE FROM `home` "
            . "WHERE `idHome` = '" . $homeDto->getIdHome()
            . "';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }
}

?>
