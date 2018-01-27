<?php

require_once("util/Factory.php");
require_once("model/UsuarioDto.php");

/**
 * @author Robson
 *
 */
class UsuarioBusiness
{

    public $con;

    /**
     * Método construtor da classe que setta o valor da instuicaoBusiness.
     * e realiza a conexão com  o BD.
     */
    public function UsuarioBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Função responsável por pesquisar todas as instituições
     * @return String json com todas as instituições.
     */
    public function findAll()
    {
        /*$query = "select * from usuario as u "
        ."inner join corretor as c "
        . "on u.idUsuario = c.idUsuario";*/

         $query = "select * from usuarios";


        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

    /**
     * Função responsável por pesquisar os dados da instituição do aluno logado.
     * @param EstadoDto $cursoDto dto da instituição que esta sendo pesquisado.
     * @return string json contando os dados da instituição do aluno logado.
     */
    public function find(UsuarioDto $usuarioDto)
    {
        $query = "SELECT * FROM usuarios "
            . "WHERE idUsuario = '" . $usuarioDto->getIdUsuario() . "';";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }


   /**
     * Função responsável por pesquisar os dados da instituição do aluno logado.
     * @param EstadoDto $cursoDto dto da instituição que esta sendo pesquisado.
     * @return string json contando os dados da instituição do aluno logado.
     */
    public function login(UsuarioDto $usuarioDto)
    {
        $query = "SELECT * FROM usuarios "
            . "WHERE usuario = '" . $usuarioDto->getUsuario() . "' "
            ."AND senha = '".$usuarioDto->getSenha()."';";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        if($collection == null){
            return "Nao Encontrado";
        }
        return $collection;
    }

    public function recuperacao(UsuarioDto $usuarioDto)
    {
        $query = "SELECT * FROM usuarios "
            . "WHERE  email = '" . $usuarioDto->getEmail() . "';";

        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        if($collection == null){
            return "Nao Encontrado";
        }else{
          $this->enviaEmail($usuarioDto);
        }
        return $collection;
    }

    /**
     * Função responsável por inserir instituições
     * @param ContatoDto $instituicaoDto dto da instituicao que sera inserida.
     * @return String json contendo a resposta da solicitação de inserção.
     */
    public function insert(UsuarioDto $usuarioDto)
    {
        $query = "INSERT INTO `usuarios` (`NOME`, `SOBRENOME`, `MATRICULA`, `EMAIL`, `USUARIO`, `SENHA`,`ATIVO`, `ADMINISTRADOR`) "
            . "VALUES ('" . $usuarioDto->getNome() . "', '"
            . $usuarioDto->getSobrenome() . "', '"
            . $usuarioDto->getMatricula() . "', '"
            . $usuarioDto->getEmail() . "', '"
            . $usuarioDto->getUsuario() . "', '"
            . $usuarioDto->getSenha() . "', '"
            . $usuarioDto->getAtivo() . "', '"
            . $usuarioDto->getAdministrador() . "'); '";


        $stmt = $this->con->getConnection()->prepare($query);

        $collection = $stmt->execute();

        return $collection;
    }

    /**
     * Função responsável por realizar o update de dados da instituição.
     * @param ContatoDto $instituicaoDto dto da instituição que sera alterada na base de dados.
     * @return String json contendo a resposta da solicitação de update da instituição.
     */
    public function update(UsuarioDto $usuarioDto)
    {
        $query = "UPDATE `usuarios` SET  "
            . "`NOME` = '" . $usuarioDto->getNome() . "', "
            . "`SOBRENOME` = '" . $usuarioDto->getSobrenome() . "', "
            . "`MATRICULA` = '" . $usuarioDto->getMatricula() . "', "
            . "`EMAIL` = '" . $usuarioDto->getEmail() . "', "
            . "`USUARIO` = '" . $usuarioDto->getUsuario() . "', "
            . "`SENHA` = '" . $usuarioDto->getSenha() . "', "
            . "`ATIVO` = '" . $usuarioDto->getAtivo() . "', "
            . "`ADMINISTRADOR` = '" . $usuarioDto->getAdministrador() . "' "
            . "WHERE `ID_USUARIO` = '" . $usuarioDto->getIdUsuario() . "';";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();

        return $collection;
    }


    /**
     * Função responsável por excluir a instituição.
     * @param ContatoDto $instituicaoDto dto da instituição que sera apagada da base de dados.
     * @return String json contendo a resposta da solicitação de exclusão.
     */
    public function delete(UsuarioDto $usuarioDto)
    {

        $query = "DELETE FROM `usuarios` "
            . "WHERE `ID_USUARIO` = '" . $usuarioDto->getIdUsuario() . "'";

        $rs = $this->con->getConnection()->prepare($query);

        $collection = $rs->execute();
        return $collection;
    }

    public function enviaEmail(UsuarioDto $usuarioDto)
    {

      ini_set('display_errors', 1);

      error_reporting(E_ALL);

      $from = "wallace_25@hotmail.com";

      $to = "wallace_25@hotmail.com";

      $subject = "Verificando o correio do PHP";

      $message = "O correio do PHP funciona bem";

      $headers = "De:". $from;

      mail($to, $subject, $message, $headers);

      echo "A mensagem de e-mail foi enviada.";


    }


}

?>
