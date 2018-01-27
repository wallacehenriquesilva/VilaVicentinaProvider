<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class EventoDto
{
    private $idEvento;
    private $data;
    private $titulo;
    private $descricao;
    private $usuario;
    private $nome_imagem;

    /**
     * @return mixed
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * @param mixed $idEvento
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;
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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getNomeImagem()
    {
        return $this->nome_imagem;
    }

    /**
     * @param mixed $nome_imagem
     */
    public function setNomeImagem($nome_imagem)
    {
        $this->nome_imagem = $nome_imagem;
    }


}
