<?php
require_once("business/PublicacoesBusiness.php");
require_once("model/PublicacoesDto.php");

/**
 * Classe PublicacoesService responsável pelo CRUD do Publicacoes.
 * @author Wallace e Cia
 *
 */
class PublicacoesService
{
    var $PublicacoesBusiness;

    /**
     * Método construtor da classe que setta o valor da contatoService.
     */
    public function PublicacoesService()
    {
        $this->publicacoesBusiness = new PublicacoesBusiness();
    }

    /**
     * Função responsável por pesquisar todos os contatoes.
     * @return String json com todos os contatoes.
     */
    public function findPublicacoess()
    {
        return json_encode($this->publicacoesBusiness->findPublicacoess());
    }

}

?>
