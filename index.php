<?php
require_once './config/config.php';
        require_once 'vendor/autoload.php';
        $valida = new \Thirday\Valida\Validacao;
        $msg    = new thirday\messages\MensagemFactory;



        if (isset($_POST) and count($_POST)>0) {
            try {
                new Thirday\Usuario\UserClient;
                echo "<script type=\"text/javascript\">alert('Cadastro efetuado. Aguarde email.')</script>";
              
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();

                if ($exc->getCode() == E_USER_ERROR) {
                    $msg->exibeMensagem(new \thirday\messages\ErrorMessage,
                        $exc->getMessage());
                } else {
                    $msg->exibeMensagem(new \thirday\messages\InfoMessage,
                        $exc->getMessage());
                }
            }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Saindo do poço! Sua nova proposta de trabalho, sua melhor possibilidade financeira.</title>
        <link rel="stylesheet" href="boot/css/bootstrap.min.css"><!--//BootStrap-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php
        include_once './html/Home_01.php';
        


            $htm = new Home_01;
            $htm->show();
            ?>



        <script src="script/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="script/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="boot/js/bootstrap.min.js"></script><!--//BootStrap-->
    </body>
</html>
<script type="text/javascript">
    jQuery(function ($) {

        $("#celular").mask("(99) 99999-9999");



    });

</script>