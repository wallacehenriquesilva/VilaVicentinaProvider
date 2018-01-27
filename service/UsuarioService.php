<?php
require_once("business/UsuarioBusiness.php");
require_once("model/UsuarioDto.php");

/**
 * Classe de login do usuário.
 * @author Wallace e Cia
 *
 */
class UsuarioService
{

    var $usuarioBusiness;
    var $usuarioDto;

    public function usuarioService()
    {
        $this->usuarioBusiness = new UsuarioBusiness();
        $this->usuarioDto = new UsuarioDto();
    }

    /**
     * Função responsável por pesquisar todos os cursos.
     * @return String json com os dados dos cursos.
     */
    public function findAll()
    {
        return json_encode($this->usuarioBusiness->findAll());
    }

    /**
     * Função responsável por pesquisar todas os dados dos cursos da instituição do usuário logado.
     * @return String json contando os dados do curso do aluno logado.
     */
    public function find()
    {
        //$this->usuarioDto->setIdUsuario($_GET['idUsuario']);

        return json_encode($this->usuarioBusiness->findAll($this->usuarioDto));
    }


    /**
     * Função responsável por inserir cursos.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de inserção de curso.
     */
    public function insert($json)
    {
        return json_encode($this->usuarioBusiness->insert($this->readJson($json)));
    }


    /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function update($json)
    {
        return json_encode($this->usuarioBusiness->update($this->readJson($json)));
    }

        /**
     * Função responsável por realizar o update dos dados do curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de update do curso.
     */
    public function login($json)
    {
        return json_encode($this->usuarioBusiness->login($this->readJson($json)));
    }


    public function recuperacao($json)
    {
        return json_encode($this->usuarioBusiness->recuperacao($this->readJson($json)));
    }

    /**
     * Função responsável por realizar a exclusão de um curso.
     * @param $json String json contendo os dados da request.
     * @return String json contendo a resposta da solicitação de exclusão de curso.
     */
    public function delete($json)
    {
        return json_encode($this->usuarioBusiness->delete($this->readJson($json)));
    }

    public function readJson($json): UsuarioDto
    {
        $usuario = json_decode($json, true);

        $this->usuarioDto->setIdUsuario($usuario['idUsuario']);
        $this->usuarioDto->setNome($usuario['nome']);
        $this->usuarioDto->setSobrenome($usuario['sobrenome']);
        $this->usuarioDto->setMatricula($usuario['matricula']);
        $this->usuarioDto->setEmail($usuario['email']);
        $this->usuarioDto->setUsuario($usuario['usuario']);
        $this->usuarioDto->setSenha($usuario['senha']);
        $this->usuarioDto->setAtivo($usuario['ativo']);
        $this->usuarioDto->setAdministrador($usuario['administrador']);

        return $this->usuarioDto;
    }
}

?>
