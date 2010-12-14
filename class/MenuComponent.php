<?php

  /**
   * MenuComponent
   *
   * Not much to see here except for some methods 
   * inherited by MenuComposite and MenuItem.
   *
   * @author Robert Bost <bostrt at gmail dot com>
   */
abstract class MenuComponent
{
    protected $tag;
    protected $text;

    protected $template;
    protected $module;

    public function __construct($text, $tag)
    {
        $this->text = $text;
        $this->tag = $tag;
    }

    abstract function show();

    public function get(){
        return null;
    }
    
    public function setTemplate($tpl){
        $this->template = $tpl;
    }

    public function setModule($mod){
        $this->module = $mod;
    }

    public function getText(){
        return $this->text;
    }

    public function getTag(){
        return $this->tag;
    }
}

?>