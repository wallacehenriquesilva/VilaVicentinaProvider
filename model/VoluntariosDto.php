<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class VoluntariosDto
{
    private $idVoluntarios;
    private $nomeVoluntarios;
    private $atividadeVoluntarios;
    private $telefoneVoluntarios;
    private $disponibilidade;

    /**
     * @return mixed
     */
    public function getIdVoluntarios()
    {
        return $this->idVoluntarios;
    }

    /**
     * @param mixed $idVoluntarios
     */
    public function setIdVoluntarios($idVoluntarios)
    {
        $this->idVoluntarios = $idVoluntarios;
    }

    /**
     * @return mixed
     */
    public function getNomeVoluntarios()
    {
        return $this->nomeVoluntarios;
    }

    /**
     * @param mixed $nomeVoluntarios
     */
    public function setNomeVoluntarios($nomeVoluntarios)
    {
        $this->nomeVoluntarios = $nomeVoluntarios;
    }

    /**
     * @return mixed
     */
    public function getAtividadeVoluntarios()
    {
        return $this->atividadeVoluntarios;
    }

    /**
     * @param mixed $atividadeVoluntarios
     */
    public function setAtividadeVoluntarios($atividadeVoluntarios)
    {
        $this->atividadeVoluntarios = $atividadeVoluntarios;
    }

    /**
     * @return mixed
     */
    public function getTelefoneVoluntarios()
    {
        return $this->telefoneVoluntarios;
    }

    /**
     * @param mixed $telefoneVoluntarios
     */
    public function setTelefoneVoluntarios($telefoneVoluntarios)
    {
        $this->telefoneVoluntarios = $telefoneVoluntarios;
    }

    /**
     * @return mixed
     */
    public function getDisponibilidade()
    {
        return $this->disponibilidade;
    }

    /**
     * @param mixed $disponibilidade
     */
    public function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade = $disponibilidade;
    }


}