<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class InformacoesUteisDto
{
    private $idInformacao;
    private $informacao;
    private $telefone;

    /**
     * @return mixed
     */
    public function getIdInformacao()
    {
        return $this->idInformacao;
    }

    /**
     * @param mixed $idBazar
     */
    public function setIdInformacao($idInformacao)
    {
        $this->idInformacao = $idInformacao;
    }

    /**
     * @return mixed
     */
    public function getInformacao()
    {
        return $this->informacao;
    }

    /**
     * @param mixed $horario_funcionamento
     */
    public function setInformacao($informacao)
    {
        $this->informacao = $informacao;
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
}
