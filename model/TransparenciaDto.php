<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class TransparenciaDto
{
    private $idTransparencia;
    private $data;
    private $valor;
    private $nome_arquivo;

    /**
     * @return mixed
     */
    public function getIdTransparencia()
    {
        return $this->idTransparencia;
    }

    /**
     * @param mixed $idTransparencia
     */
    public function setIdTransparencia($idTransparencia)
    {
        $this->idTransparencia = $idTransparencia;
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

    /**
     * @return mixed
     */
    public function getNomeArquivo()
    {
        return $this->nome_arquivo;
    }

    /**
     * @param mixed $nome_arquivo
     */
    public function setNomeArquivo($nome_arquivo)
    {
        $this->nome_arquivo = $nome_arquivo;
    }


}
