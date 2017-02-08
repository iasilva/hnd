O funcionamento desse pacote gera html considerando que se tenha o
twitter bootstrap em uso; https://getbootstrap.com/

Para a geração de mensagens, basta carregar uma instancia de MensagemFactory:
$message=new \thirday\messages\MensagemFactory;

O pacote está no namespace thirday\messages

Você pode utilizar 4 tipos de estilização das mensagens passando uma das instancias
como primeiro parâmetro do método $message->exibeMensagem($classMessage,$message)

Exemplo de mensagem de informação:
-$message->exibeMensagem(new thirday\messages\InfoMessage, "Olá! essa é uma mensagem de informação");
-$message->exibeMensagem(new thirday\messages\ErrorMessage, "Olá! essa é uma mensagem de ERRO");



