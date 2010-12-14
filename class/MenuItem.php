<?php

PHPWS_Core::initModClass('othermenu', 'MenuComponent.php');

class MenuItem extends MenuComponent
{
    public function show()
    {
        $vars = array();
        $vars['TAG'] = $this->tag;
        $vars['TEXT'] = $this->text;

        if(isset($this->template) && isset($this->module)){
            return PHPWS_Template::process($vars, $this->module, $this->template);
        }else{
            // Default. List item style.
            return PHPWS_Template::process($vars, 'othermenu', 'menu_item.tpl');
        }
    }
}

?>