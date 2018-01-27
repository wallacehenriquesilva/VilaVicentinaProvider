<?php
require_once("business/ContribuaBusiness.php");
require_once("model/ContribuaDto.php");

/**
 *
 * @author Wallace e Cias
 *
 */
class ContribuaService
{

    var $contribuaBusiness;
    var $contribuaDto;

    /**
     * Método construtor da classe CursoService
     */
    public function ContribuaService()
    {
        $this->contribuaBusiness = new ContribuaBusiness();
        $this->contribuaDto = new ContribuaDto();
    }

    /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */
    public function find()
    {
        return json_encode($this->contribuaBusiness->find());
    }

    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update($json)
    {
        return json_encode($this->contribuaBusiness->update($this->readJson($json)));
    }

    public function insert($json)
    {
        return json_encode($this->contribuaBusiness->insert($this->readJson($json)));
    }


    public function readJson($json): ContribuaDto
    {
        $contato = json_decode($json, true);

        $this->contribuaDto->setIdContribua($contato['idContribua']);
        $this->contribuaDto->setConta($contato['conta']);
        $this->contribuaDto->setBanco($contato['banco']);
        $this->contribuaDto->setAgencia($contato['agencia']);
        $this->contribuaDto->setIdPaypal($contato['idPaypal']);
        $this->contribuaDto->setEmailPagseguro($contato['email_pagseguro']);
        $this->contribuaDto->setListaProdutos($contato['lista_produtos']);
        $this->contribuaDto->setQuantidadeProdutos($contato['quantidade_produtos']);

        return $this->contribuaDto;
    }
}

?>
