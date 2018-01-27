<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class HomeDto
{
    private $idHome;
    private $titulo;
    private $bio;

    /**
     * @return mixed
     */
    public function getIdHome()
    {
        return $this->idHome;
    }

    /**
     * @param mixed $idHome
     */
    public function setIdHome($idHome)
    {
        $this->idHome = $idHome;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }


}
