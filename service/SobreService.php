<?php
require_once("business/SobreBusiness.php");
require_once("model/SobreDto.php");

/**
 *
 * @author Wallace e Cias
 *
 */
class SobreService
{

    var $sobreBusiness;
    var $sobreDto;

    /**
     * Método construtor da classe CursoService
     */
    public function SobreService()
    {
        $this->sobreBusiness = new SobreBusiness();
        $this->sobreDto = new SobreDto();
    }

    /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */
    public function find()
    {
        return json_encode($this->sobreBusiness->find());
    }

    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update($json)
    {
        return json_encode($this->sobreBusiness->update($this->readJson($json)));
    }


    public function readJson($json): SobreDto
    {
        $sobre = json_decode($json, true);

        $this->sobreDto->setSobre($sobre['sobre']);
        $this->sobreDto->setMissao($sobre['missao']);
        $this->sobreDto->setVisao($sobre['visao']);
        $this->sobreDto->setValores($sobre['valores']);


        return $this->sobreDto;
    }
}

?>