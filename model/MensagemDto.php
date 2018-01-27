<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class MensagemDto
{
    private $idMensagem;
    private $data;
    private $mensagem;
    private $email;
    private $telefone;
    private $nome;

    /**
     * @return mixed
     */
    public function getIdMensagem()
    {
        return $this->idMensagem;
    }

    /**
     * @param mixed $idMensagem
     */
    public function setIdMensagem($idMensagem)
    {
        $this->idMensagem = $idMensagem;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}
