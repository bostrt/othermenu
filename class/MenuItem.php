<?php
class MenuItem
{
  protected $tag;
  protected $text;

  public function __construct($text, $tag)
  {
    $this->text = $text;
    $this->tag  = $tag;
  }

  public function show()
  {
    $tpl = array();
    
    $tpl['TEXT'] = $this->text;
    $tpl['TAG'] = $this->tag;

    return $tpl;
  }

  public function getText(){
    return $this->text;
  }
  public function getTag(){
    return $this->tag;
  }
}

?>