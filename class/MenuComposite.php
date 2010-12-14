<?php
  /**
   * MenuComposite
   *
   * Can contain other MenuComposites(Menus) or MenuItems.
   *
   * @author Robert Bost <bostrt at gmail dot com>
   */

PHPWS_Core::initModClass('othermenu', 'MenuComponent.php');

class MenuComposite extends MenuComponent
{
    protected $container = array();
    
    // Add a component to this menu.
    protected function add(MenuComponent $comp)
    {
        $tag = $comp->getTag();
        $this->container[$tag] = $comp;
    }
    
    // Get a component from this menu by the tag.
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

    /**
     * Show this menu along with its children.
     * TODO: Allow user to set style/format. Don't just use
     *       a UL.
     */
    public function show()
    {
        // Build up template tags.
        $vars = array();
        $vars['TAG'] = $this->tag;
        $vars['TEXT'] = $this->text;
        foreach($this->container as $comp){
            $vars['components'][]['CONTENTS'] = $comp->show();
        }

        // Plug and chug.
        if(isset($this->template) && isset($this->module)){
            return PHPWS_Template::process($vars, $this->module, $this->template);
        }else{
            return PHPWS_Template::process($vars, 'othermenu', 'menu_composite.tpl');
        }
    }
    
    // Check if this menu contains the component identified by its tag.
    public function has($tag)
    {
        return isset($this->container[$tag]);
    }
}
?>