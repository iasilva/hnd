<?php
/**
 * Pacote Message
 */
require_once __DIR__.'/messages/src/Mensagem.php';
require_once __DIR__.'/messages/src/iMessage.php';
require_once __DIR__.'/messages/src/AlertMessage.php';
require_once __DIR__.'/messages/src/InfoMessage.php';
require_once __DIR__.'/messages/src/ErrorMessage.php';
require_once __DIR__.'/messages/src/SuccessMessage.php';
require_once __DIR__.'/messages/src/MensagemFactory.php';

/**
 * Pacote Valida
 */
require_once __DIR__.'/valida/iValida.php';
require_once __DIR__.'/valida/iValidacao.php';
require_once __DIR__.'/valida/ValidaEmail.php';
require_once __DIR__.'/valida/ValidaNome.php';
require_once __DIR__.'/valida/Validacao.php';

/**
 * Database
 */
require_once __DIR__.'/Database.php';

/**
 * Usuário
 */
require_once 'src/usuario/iUser.php';
require_once 'src/usuario/UserClient.php';
require_once 'src/usuario/Prospecto.php';