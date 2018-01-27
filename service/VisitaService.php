<?php
require_once("business/VisitaBusiness.php");
require_once("model/ComoVisitarDto.php");

/**
 *
 * @author Wallace e Cias
 *
 */
class VisitaService
{

    var $visitaBusiness;
    var $visitaDto;

    /**
     * Método construtor da classe CursoService
     */
    public function VisitaService()
    {
        $this->visitaBusiness = new VisitaBusiness();
        $this->visitaDto = new ComoVisitarDto();
    }

    /**
     * Função responsável por pesquisar todos os cursos.
     * @return String json com os dados dos cursos.
     */
    public function findAll()
    {
        return json_encode($this->visitaBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */
    public function find()
    {
        //$this->visitaDto->setIdEstado($_GET['idEstado']);
        return json_encode($this->visitaBusiness->find());
    }


    /**
     * Função responsável por inserir cursos.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção de curso.
     */
    public function insert($json)
    {
        return json_encode($this->visitaBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update($json)
    {
        return json_encode($this->visitaBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsável por realizar a exclusão de um curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão de curso.
     */
    public function delete($json)
    {
        return json_encode($this->visitaBusiness->delete($this->readJson($json)));
    }

    public function readJson($json): ComoVisitarDto
    {
        $visita = json_decode($json, true);

        $this->visitaDto->setIdVisitar($visita['idVisita']);
        $this->visitaDto->setData($visita['data']);
        $this->visitaDto->setResumo($visita['resumo']);
        $this->visitaDto->setEndereco($visita['endereco']);
        $this->visitaDto->setHorarioFuncionamento($visita['horario_funcionamento']);

        return $this->visitaDto;
    }
}

?>
