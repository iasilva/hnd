<?php



/**
 * Description of InfoMessage
 *
 * @author ivana
 */
namespace thirday\messages;

class InfoMessage extends \thirday\messages\iMessage{
     public function getMessage() {
        $html="<div class=\"alert alert-info\" role=\"alert\">";
        $html.="<strong><span class=\"glyphicon glyphicon-pushpin\"></span> </strong>";
        $html.= $this->message."</div>";
        return $html;
    }
}
