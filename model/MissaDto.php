<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class MissaDto
{
    private $idMissa;
    private $data;
    private $resumo;

    /**
     * @return mixed
     */
    public function getIdMissa()
    {
        return $this->idMissa;
    }

    /**
     * @param mixed $idMissa
     */
    public function setIdMissa($idMissa)
    {
        $this->idMissa = $idMissa;
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


}
