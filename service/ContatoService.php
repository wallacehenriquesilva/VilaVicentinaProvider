<?php
require_once("business/ContatoBusiness.php");
require_once("model/ContatoDto.php");

/**
 * Classe ContatoService responsável pelo CRUD do Contato.
 * @author Wallace e Cia
 *
 */
class ContatoService
{
    var $contatoBusiness;
    var $contatoDto;

    /**
     * Método construtor da classe que setta o valor da contatoService.
     */
    public function ContatoService()
    {
        $this->contatoBusiness = new ContatoBusiness();
        $this->contatoDto = new ContatoDto();
    }

    /**
     * Função responsável por pesquisar todos os contatoes.
     * @return String json com todos os contatoes.
     */
    public function findAll()
    {
        return json_encode($this->contatoBusiness->findAll());
    }


    /**
     * Função responsável por retornar os dados do contato logado.
     * @return string json contando os dados do contato logado.
     */
    public function find()
    {
        //$this->contatoDto->setIdContato($_GET['idContato']);

        return json_encode($this->contatoBusiness->find($this->contatoDto));
    }


    /**
     * Função responsável por inserir um contato.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert($json)
    {
        return json_encode($this->contatoBusiness->insert($this->readJson($json)));
    }

    /**
     * Função responsável por realizar o update de dados do aluno.
     * @param $json String json contendo os dados da request.
     * @return string json contendo a resposta da solicitação de update do aluno.
     */
    public function update($json)
    {
        return json_encode($this->contatoBusiness->update($this->readJson($json)));
    }

    /**
     * Função responsável por excluir um contato.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete($json)
    {
        return json_encode($this->contatoBusiness->delete($this->readJson($json)));
    }

    /**
     * Método responsável por ler o json e retornar um Dto
     * @param $json Json da requisição
     * @return ContatoDto dto do json tratado.
     */
    public function readJson($json): ContatoDto
    {
        $contato = json_decode($json, true);

        $this->contatoDto->setIdContato($contato['idContato']);
        $this->contatoDto->setTelefone($contato['telefone']);
        $this->contatoDto->setFacebook($contato['facebook']);
        $this->contatoDto->setEmail($contato['email']);

        return $this->contatoDto;
    }
}
?>
