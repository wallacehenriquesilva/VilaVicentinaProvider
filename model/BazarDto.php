<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class BazarDto
{
    private $idBazar;
    private $horario_funcionamento;
    private $telefone;
    private $facebook;
    private $produto;
    private $quantidade;
    private $preco;
    private $nome_arquivo;

    /**
     * @return mixed
     */
    public function getIdBazar()
    {
        return $this->idBazar;
    }

    /**
     * @param mixed $idBazar
     */
    public function setIdBazar($idBazar)
    {
        $this->idBazar = $idBazar;
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

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
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
