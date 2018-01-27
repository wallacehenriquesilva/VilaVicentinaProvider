<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class ServicosDto
{
    private $idServicos;
    private $titulo;
    private $descricao;
    private $valor;

    /**
     * @return mixed
     */
    public function getIdServicos()
    {
        return $this->idServicos;
    }

    /**
     * @param mixed $idServicos
     */
    public function setIdServicos($idServicos)
    {
        $this->idServicos = $idServicos;
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
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }


}