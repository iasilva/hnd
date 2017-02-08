<?php

include_once '../src/iMessage.php';
include_once '../src/Mensagem.php';
include_once '../src/MensagemFactory.php';
include_once '../src/AlertMessage.php';
include_once '../src/ErrorMessage.php';
include_once '../src/InfoMessage.php';
include_once '../src/SuccessMessage.php';

$message=new \thirday\messages\MensagemFactory;
$message->exibeMensagem(new thirday\messages\AlertMessage, "Olá! essa é uma mensagem de alerta");
$message->exibeMensagem(new thirday\messages\InfoMessage, "Olá! essa é uma mensagem de informação");
$message->exibeMensagem(new thirday\messages\ErrorMessage, "Olá! essa é uma mensagem de ERRO");
$message->exibeMensagem(new thirday\messages\SuccessMessage, "Olá! essa é uma mensagem de sucesso");