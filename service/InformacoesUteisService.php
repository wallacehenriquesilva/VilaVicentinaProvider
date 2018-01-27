<?php
require_once("business/InformacoesUteisBusiness.php");
require_once("model/InformacoesUteisDto.php");

/**
 *
 * @author Wallace e Cias
 *
 */
class InformacoesUteisService
{

    var $informacoesUteisBusiness;
    var $informacoesUteisDto;

    /**
     * Método construtor da classe CursoService
     */
    public function InformacoesUteisService()
    {
        $this->informacoesUteisBusiness = new InformacoesUteisBusiness();
        $this->informacoesUteisDto = new InformacoesUteisDto();
    }

    /**
     * Função responsável por pesquisar todos os cursos.
     * @return String json com os dados dos cursos.
     */
    public function findAll()
    {
        return json_encode($this->informacoesUteisBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */
    public function find()
    {
        ///$this->informacoesUteisDto->setIdInformacoesUteis($_GET['idInformacoesUteis']);

        return json_encode($this->informacoesUteisBusiness->find($this->informacoesUteisDto));
    }


    /**
     * Função responsável por inserir cursos.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção de curso.
     */
    public function insert($json)
    {
        return json_encode($this->informacoesUteisBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update($json)
    {
        return json_encode($this->informacoesUteisBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsável por realizar a exclusão de um curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão de curso.
     */
    public function delete($json)
    {
        return json_encode($this->informacoesUteisBusiness->delete($this->readJson($json)));
    }

    public function readJson($json): InformacoesUteisDto
    {
        $informacoesUteis = json_decode($json, true);

        $this->informacoesUteisDto->setIdInformacao($informacoesUteis['idInformacao']);
        $this->informacoesUteisDto->setInformacao($informacoesUteis['informacao']);
        $this->informacoesUteisDto->setTelefone($informacoesUteis['telefone']);

        return $this->informacoesUteisDto;
    }
}

?>
