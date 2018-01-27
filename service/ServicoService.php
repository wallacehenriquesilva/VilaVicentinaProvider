<?php
require_once("business/ServicoBusiness.php");
require_once("model/ServicosDto.php");

/**
 * Classe Adapter da Publicação.
 * @author Wallace e Cia
 *
 */
class ServicoService
{

    var $servicoBusiness;
    var $servicoDto;

    /**
     * Método construtor da classe
     *
     */
    public function ServicoService()
    {
        $this->servicoDto = new ServicosDto();

        $this->servicoBusiness = new ServicoBusiness();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
    public function findAll()
    {
        return json_encode($this->servicoBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * @return String json contando os dados do servico do usuário logado.
     */
    public function find()
    {
        //$this->servicoDto->setIdServico($_GET['idServico']);
        return json_encode($this->servicoBusiness->find($this->servicoDto));
    }


    /**
     * Função responsável por inserir publicacoes.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert($json)
    {
        return json_encode($this->servicoBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados da servico.
     * @param $json String json contendo os dados da request.
     * @return string json contendo a resposta da solicitação de update da servico.
     */
    public function update($json)
    {
        return json_encode($this->servicoBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete($json)
    {
        return json_encode($this->servicoBusiness->delete($this->readJson($json)));
    }

    /**
     * <p> Função responável por ler os dados do json e coloca-los em um Dto.</p>
     * @param $json Json contendo o corpo da requisição
     * @return ServicoDto Dto com os dados vindos do Json.
     */
    public function readJson($json): ServicosDto
    {
        $servico = json_decode($json, true);

        $this->servicoDto->setIdServicos($servico['idServicos']);
        $this->servicoDto->setTitulo($servico['titulo']);
        $this->servicoDto->setDescricao($servico['descricao']);
        $this->servicoDto->setValor($servico['valor']);
        return $this->servicoDto;
    }
}

?>
