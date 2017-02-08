<?php


/**
 * Description of SuccessMessage
 *
 * @author Ivan Alves da Silva
 */
namespace thirday\messages;

class SuccessMessage extends \thirday\messages\iMessage {
    public function getMessage() {
        $html="<div class=\"alert alert-success\" role=\"alert\">";
        $html.="<strong><span class=\"glyphicon glyphicon-thumbs-up\"></span> </strong>";
        $html.= $this->message."</div>";
        return $html;
    }
}
