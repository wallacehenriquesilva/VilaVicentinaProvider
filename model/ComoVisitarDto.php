<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class ComoVisitarDto
{
    private $idVisitar;
    private $data;
    private $resumo;
    private $endereco;
    private $horario_funcionamento;

    /**
     * @return mixed
     */
    public function getIdVisitar()
    {
        return $this->idVisitar;
    }

    /**
     * @param mixed $idVisitar
     */
    public function setIdVisitar($idVisitar)
    {
        $this->idVisitar = $idVisitar;
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
    public function getResumo()
    {
        return $this->resumo;
    }

    /**
     * @param mixed $resumo
     */
    public function setResumo($resumo)
    {
        $this->resumo = $resumo;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getHorarioFuncionamento()
    {
        return $this->horario_funcionamento;
    }

    /**
     * @param mixed $horario_funcionamento
     */
    public function setHorarioFuncionamento($horario_funcionamento)
    {
        $this->horario_funcionamento = $horario_funcionamento;
    }
    
    

}
