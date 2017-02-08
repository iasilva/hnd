<?php


/**
 * Description of Mensagem
 *
 * @author Ivan Alves da Silva
 */
namespace thirday\messages;

abstract class Mensagem {
    protected $mensagem;
    abstract function geraMensagem(\thirday\messages\iMessage $mensagemClass);
    
    /**
     * 
     * @param iMessage $tipoMensagem - instancia de uma das classes de mensagens
     * @param string $mensagem - Mensagem a ser exibida
     */
    public function exibeMensagem($tipoMensagem,$mensagem){
        $this->mensagem=$mensagem;
        $this->geraMensagem($tipoMensagem);
    }
}
