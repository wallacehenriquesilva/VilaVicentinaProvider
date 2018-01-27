<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class CentroDiaDto
{
    private $idCentro;
    private $resumo;

    /**
     * @return mixed
     */
    public function getIdCentro()
    {
        return $this->idCentro;
    }

    /**
     * @param mixed $idCentro
     */
    public function setIdCentro($idCentro)
    {
        $this->idCentro = $idCentro;
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
