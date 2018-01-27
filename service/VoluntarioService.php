<?php
require_once("business/VoluntariosBusiness.php");
require_once("model/VoluntariosDto.php");

/**
 * Classe Adapter da Publicação.
 * @author Wallace e Cia
 *
 */
class VoluntarioService
{

    var $voluntarioBusiness;
    var $voluntarioDto;

    /**
     * Método construtor da classe
     *
     */
    public function VoluntarioService()
    {
        $this->voluntarioDto = new VoluntariosDto();

        $this->voluntarioBusiness = new VoluntariosBusiness();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
    public function findAll()
    {
        return json_encode($this->voluntarioBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * @return String json contando os dados do voluntario do usuário logado.
     */
    public function find()
    {
        //$this->voluntarioDto->setIdVoluntario($_GET['idVoluntario']);
        return json_encode($this->voluntarioBusiness->findAll($this->voluntarioDto));
    }


    /**
     * Função responsável por inserir publicacoes.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert($json)
    {
        return json_encode($this->voluntarioBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados da voluntario.
     * @param $json String json contendo os dados da request.
     * @return string json contendo a resposta da solicitação de update da voluntario.
     */
    public function update($json)
    {
        return json_encode($this->voluntarioBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete($json)
    {
        return json_encode($this->voluntarioBusiness->delete($this->readJson($json)));
    }

    /**
     * <p> Função responável por ler os dados do json e coloca-los em um Dto.</p>
     * @param $json Json contendo o corpo da requisição
     * @return VoluntarioDto Dto com os dados vindos do Json.
     */
    public function readJson($json): VoluntariosDto
    {
        $voluntario = json_decode($json, true);

        $this->voluntarioDto->setIdVoluntarios($voluntario['idVoluntarios']);
        $this->voluntarioDto->setNomeVoluntarios($voluntario['nomeVoluntarios']);
        $this->voluntarioDto->setAtividadeVoluntarios($voluntario['atividadeVoluntarios']);
        $this->voluntarioDto->setTelefoneVoluntarios($voluntario['telefoneVoluntarios']);
        $this->voluntarioDto->setDisponibilidade($voluntario['disponibilidade']);

        return $this->voluntarioDto;
    }
}

?>
