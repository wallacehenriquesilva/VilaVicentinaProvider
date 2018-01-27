<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class HistoriaDto
{
    private $idHistoria;
    private $historia;

    /**
     * @return mixed
     */
    public function getIdHistoria()
    {
        return $this->idHistoria;
    }

    /**
     * @param mixed $idHistoria
     */
    public function setIdHistoria($idHistoria)
    {
        $this->idHistoria = $idHistoria;
    }

    /**
     * @return mixed
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * @param mixed $historia
     */
    public function setHistoria($historia)
    {
        $this->historia = $historia;
    }


}
