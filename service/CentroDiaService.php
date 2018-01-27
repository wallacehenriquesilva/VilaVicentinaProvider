<?php
require_once("business/CentroDiaBusiness.php");
require_once("model/CentroDiaDto.php");

/**
 * Classe AlunoService responsável por fazer a conexão com a busnisses e pegar seu retorno.
 * @author Wallace e Cia
 *
 */
class CentroDiaService
{

    var $centroDiaBusiness;
    var $centroDiaDto;

    /**
     * Método construtor da classe Aluno service.
     */
    public function CentroDiaService()
    {
        $this->centroDiaBusiness = new CentroDiaBusiness();
        $this->centroDiaDto = new CentroDiaDto();
    }

    /**
     * Função responsável por pesquisar todos os Alunos.
     * @return String json contendo o resultado do select realizado.
     */
    public function findAll()
    {
        return json_encode($this->centroDiaBusiness->findAll());
    }


    /**
     * Função responsável por pesquisar todos os dados do aluno logado.
     * @return String json contando os dados do aluno logado.
     */
    public function find()
    {
        //$this->centroDiaDto->setIdCentroDia($_GET['idCentroDia']);

        return json_encode($this->centroDiaBusiness->find($this->centroDiaDto));
    }


    /**
     * Função responsável por inserir novos alunos
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta do server após a inserção.
     */
    public function insert($json)
    {
        return json_encode($this->centroDiaBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update de dados do aluno.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do aluno.
     */
    public function update($json)
    {
        return json_encode($this->centroDiaBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsável por realizar a exclusão de um aluno.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão do aluno.
     */
    public function delete($json)
    {
        return json_encode($this->centroDiaBusiness->delete($this->readJson($json)));
    }

    public function readJson($json): CentroDiaDto
    {
        $centroDia = json_decode($json, true);

        $this->centroDiaDto->setIdCentro($centroDia['idCentroDia']);
        $this->centroDiaDto->setResumo($centroDia['resumo']);

        return $this->centroDiaDto;
    }
}

?>
