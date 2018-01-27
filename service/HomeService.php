<?php
require_once("business/HomeBusiness.php");
require_once("model/HomeDto.php");

/**
 *
 * @author Wallace e Cias
 *
 */
class HomeService
{

    var $homeBusiness;
    var $homeDto;

    /**
     * Método construtor da classe CursoService
     */
    public function HomeService()
    {
        $this->homeBusiness = new HomeBusiness();
        $this->homeDto = new HomeDto();
    }

    /**
     * Função responsável por pesquisar todos os cursos.
     * @return String json com os dados dos cursos.
     */
    public function findAll()
    {
        return json_encode($this->homeBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */
    public function find()
    {
        return json_encode($this->homeBusiness->find($this->homeDto));
    }


    /**
     * Função responsável por inserir cursos.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção de curso.
     */
    public function insert($json)
    {
        return json_encode($this->homeBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update($json)
    {
        return json_encode($this->homeBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsável por realizar a exclusão de um curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão de curso.
     */
    public function delete($json)
    {
        return json_encode($this->homeBusiness->delete($this->readJson($json)));
    }

    public function readJson($json): HomeDto
    {
        $home = json_decode($json, true);

        $this->homeDto->setIdHome($home['idHome']);
        $this->homeDto->setTitulo($home['titulo']);
        $this->homeDto->setBio($home['bio']);

        return $this->homeDto;
    }
}

?>
