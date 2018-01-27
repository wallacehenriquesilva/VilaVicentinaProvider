<?php
require_once("business/MensagemBusiness.php");
require_once("model/MensagemDto.php");

/**
 *
 * @author Wallace e Cias
 *
 */
class MensagemService
{

    var $mensagemBusiness;
    var $mensagemDto;

    /**
     * Método construtor da classe CursoService
     */
    public function MensagemService()
    {
        $this->mensagemBusiness = new MensagemBusiness();
        $this->mensagemDto = new MensagemDto();
    }

    /**
     * Função responsável por pesquisar todos os cursos.
     * @return String json com os dados dos cursos.
     */
    public function enviaMensagem($json)
    {
        return json_encode($this->mensagemBusiness->enviaMensagem($this->readJson($json)));
    }



    public function readJson($json): MensagemDto
    {
        $mensagem = json_decode($json, true);

        $this->mensagemDto->setIdMensagem($mensagem['idMensagem']);
        $this->mensagemDto->setData($mensagem['data']);
        $this->mensagemDto->setMensagem($mensagem['mensagem']);
        $this->mensagemDto->setEmail($mensagem['email']);
        $this->mensagemDto->setTelefone($mensagem['telefone']);
        $this->mensagemDto->setNome($mensagem['nome']);
      
        return $this->mensagemDto;
    }
}

?>
