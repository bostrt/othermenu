<?php

require_once('MenuComponent.php');

class MenuComposite extends MenuComponent
{
    protected $container = array();
    
    protected function add(MenuComponent $comp)
    {
        $tag = $comp->getTag();
        $this->container[$tag] = $comp;
    }
    
    public function get($tag)
    {
        if($this->tag == $tag){
            return $this;
        }else{
            foreach($this->container as $comp){
                $result = $comp->get($tag);
                if(!is_null($result))
                    return $result;
            }
        }
        return null;
    }

    public function show()
    {
        // TODO: Change to PHPWS_Template::process
        $theText = "<ul id='$this->tag'><b>$this->text</b>";
        
        foreach($this->container as $comp){
            $theText .= $comp->show();
        }

        $theText .= "</ul>";
        return $theText;
    }

    public function has($tag)
    {
        return isset($this->container[$tag]);
    }
}

?>