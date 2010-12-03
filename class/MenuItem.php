<?php

require_once('MenuComponent.php');

class MenuItem extends MenuComponent
{
    public function show(){
        // TODO: Change to PHPWS_Template::process
        return "<li id='$this->tag'>$this->text</li>";
    }
}

?>