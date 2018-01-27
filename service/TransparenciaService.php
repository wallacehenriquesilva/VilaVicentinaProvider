<?php
require_once("business/TransparenciaBusiness.php");
require_once("model/TransparenciaDto.php");

/**
 * Classe do método TransparenciaService responsável pelo CRUD da instituição.
 * @author Wallace
 */
class TransparenciaService
{

    //Variável da instituicão
    var $transparenciaBusiness;
    var $transparenciaDto;


    /**
     * Método construtor da classe que setta o valor da instuicaoBusiness.
     */
    public function TransparenciaService()
    {
        $this->transparenciaBusiness = new TransparenciaBusiness();
        $this->transparenciaDto = new TransparenciaDto();
    }

    /**
     * Função responsável por pesquisar todas as instituições
     * @return String json com todas as instituições.
     */
    public function findAll()
    {
        return json_encode($this->transparenciaBusiness->findAll());
    }

    /**
     * Função responsável por inserir instituições
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert($json)
    {
        return json_encode($this->transparenciaBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por pesquisar os dados da instituição do aluno logado.
     * @return string json contando os dados da instituição do aluno logado.
     */
    public function find()
    {
        //$this->transparenciaDto->setIdTransparencia($_GET['idTransparencia']);
        return json_encode($this->transparenciaBusiness->find($this->transparenciaDto));
    }

    /**
     * Função responsável por realizar o update de dados da instituição.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update da instituição.
     */
    public function update($json)
    {
        return json_encode($this->transparenciaBusiness->update($this->readJson($json)));
    }


    /**
     * Função responsável por excluir a instituição.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete($json)
    {
        return json_encode($this->transparenciaBusiness->delete($this->readJson($json)));
    }


    public function readJson($json): TransparenciaDto
    {
        $transparencia = json_decode($json, true);

        $this->transparenciaDto->setIdTransparencia($transparencia['idTransparencia']);
        $this->transparenciaDto->setData($transparencia['data']);
        $this->transparenciaDto->setValor($transparencia['valor']);
        $this->transparenciaDto->setNomeArquivo($transparencia['nome_arquivo']);


        return $this->transparenciaDto;
    }
}

?>
