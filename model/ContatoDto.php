<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class ContatoDto
{
    private $idContato;
    private $telefone;
    private $facebook;
    private $email;

    /**
     * @return mixed
     */
    public function getIdContato()
    {
        return $this->idContato;
    }

    /**
     * @param mixed $idContato
     */
    public function setIdContato($idContato)
    {
        $this->idContato = $idContato;
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
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
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


}
