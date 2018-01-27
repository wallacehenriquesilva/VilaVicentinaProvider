<?php
require_once("business/BazarBusiness.php");
require_once("model/BazarDto.php");

/**
 * Classe Adapter da Publicação.
 * @author Wallace e Cia
 *
 */
class BazarService
{

    var $bazarBusiness;
    var $bazarDto;

    /**
     * Método construtor da classe
     *
     */
    public function BazarService()
    {
        $this->bazarDto = new BazarDto();

        $this->bazarBusiness = new BazarBusiness();
    }

    /**
     * Função responsável por pesquisar todas as publicações.
     * @return String json contendo os dados das publicações.
     */
    public function findAll()
    {
        return json_encode($this->bazarBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar as publicações do usuário logado.
     * @return String json contando os dados do bazar do usuário logado.
     */
    public function find()
    {
        //$this->bazarDto->setIdBazar($_GET['idBazar']);
        return json_encode($this->bazarBusiness->find());
    }


    /**
     * Função responsável por inserir publicacoes.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert($json)
    {
        return json_encode($this->bazarBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados da bazar.
     * @param $json String json contendo os dados da request.
     * @return string json contendo a resposta da solicitação de update da bazar.
     */
    public function update($json)
    {
        return json_encode($this->bazarBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsávle por realizar a exclusão da publicação.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete($json)
    {
        return json_encode($this->bazarBusiness->delete($this->readJson($json)));
    }

    /**
     * <p> Função responável por ler os dados do json e coloca-los em um Dto.</p>
     * @param $json Json contendo o corpo da requisição
     * @return BazarDto Dto com os dados vindos do Json.
     */
    public function readJson($json): BazarDto
    {
        $bazar = json_decode($json, true);

        $this->bazarDto->setIdBazar($bazar['idBazar']);
        $this->bazarDto->setHorarioFuncionamento($bazar['horario_funcionamento']);
        $this->bazarDto->setTelefone($bazar['telefone']);
        $this->bazarDto->setFacebook($bazar['facebook']);
        $this->bazarDto->setProduto($bazar['produto']);
        $this->bazarDto->setQuantidade($bazar['quantidade']);
        $this->bazarDto->setNomeArquivo($bazar['nome_arquivo']);

        return $this->bazarDto;
    }
}

?>
