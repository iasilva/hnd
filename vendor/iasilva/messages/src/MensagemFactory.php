<?php


/**
 * Description of MensagemFactory
 *
 * @author Ivan Alves da Silva
 */
namespace thirday\messages;
class MensagemFactory extends \thirday\messages\Mensagem {
    public function geraMensagem(\thirday\messages\iMessage $mensagemClass) {
      $mensagemClass->setInformation($this->mensagem);
      echo $mensagemClass->getMessage();  
    }
}
