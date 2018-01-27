<?php

/**
 * @author: Wallace Silva
 * @since: 1.0
 */
class ContribuaDto
{
    private $idContribua;
    private $conta;
    private $banco;
    private $agencia;
    private $idPaypal;
    private $email_pagseguro;
    private $lista_produtos;
    private $quantidade_produtos;

    /**
     * @return mixed
     */
    public function getIdContribua()
    {
        return $this->idContribua;
    }

    /**
     * @param mixed $idContribua
     */
    public function setIdContribua($idContribua)
    {
        $this->idContribua = $idContribua;
    }

    /**
     * @return mixed
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * @param mixed $conta
     */
    public function setConta($conta)
    {
        $this->conta = $conta;
    }

    /**
     * @return mixed
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * @param mixed $banco
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    /**
     * @return mixed
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * @param mixed $agencia
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    /**
     * @return mixed
     */
    public function getIdPaypal()
    {
        return $this->idPaypal;
    }

    /**
     * @param mixed $idPaypal
     */
    public function setIdPaypal($idPaypal)
    {
        $this->idPaypal = $idPaypal;
    }

    /**
     * @return mixed
     */
    public function getEmailPagseguro()
    {
        return $this->email_pagseguro;
    }

    /**
     * @param mixed $email_pagseguro
     */
    public function setEmailPagseguro($email_pagseguro)
    {
        $this->email_pagseguro = $email_pagseguro;
    }

    /**
     * @return mixed
     */
    public function getListaProdutos()
    {
        return $this->lista_produtos;
    }

    /**
     * @param mixed $lista_produtos
     */
    public function setListaProdutos($lista_produtos)
    {
        $this->lista_produtos = $lista_produtos;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeProdutos()
    {
        return $this->quantidade_produtos;
    }

    /**
     * @param mixed $quantidade_produtos
     */
    public function setQuantidadeProdutos($quantidade_produtos)
    {
        $this->quantidade_produtos = $quantidade_produtos;
    }


}
