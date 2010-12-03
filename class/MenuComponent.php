<?php

abstract class MenuComponent
{
    protected $tag;
    protected $text;

    public function __construct($text, $tag)
    {
        $this->text = $text;
        $this->tag = $tag;
    }
    
    public function show(){
        return null;
    }
    
    public function get(){
        return null;
    }

    public function getText(){
        return $this->text;
    }

    public function getTag(){
        return $this->tag;
    }
}

?>