<?php
require_once("business/HistoriaBusiness.php");
require_once("model/HistoriaDto.php");

/**
 * Classe de login do usuário.
 * @author Wallace e Cia
 *
 */
class HistoriaService
{

    var $historiaBusiness;
    var $historiaDto;

    public function HistoriaService()
    {
        $this->historiaBusiness = new HistoriaBusiness();
        $this->historiaDto = new HistoriaDto();
    }


    public function findAll()
    {
        return json_encode($this->historiaBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * @return String json contando os dados do bazar do usuário logado.
     */
    public function find()
    {
        //$this->bazarDto->setIdBazar($_GET['idBazar']);
        return json_encode($this->historiaBusiness->find($this->historiaDto));
    }


    /**
     * Função responsável por inserir publicacoes.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert($json)
    {
        return json_encode($this->historiaBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados da bazar.
     * @param $json String json contendo os dados da request.
     * @return string json contendo a resposta da solicitação de update da bazar.
     */
    public function update($json)
    {
        return json_encode($this->historiaBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete($json)
    {
        return json_encode($this->historiaBusiness->delete($this->readJson($json)));
    }


    public function readJson($json): HistoriaDto
    {
        $historia = json_decode($json, true);

        $this->historiaDto->setIdHistoria($historia['idHistoria']);
        $this->historiaDto->setHistoria($historia['historia']);

        return $this->historiaDto;
    }
}

?>
