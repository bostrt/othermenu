<?php
/**
 *
 * OtherMenu is an abstraction upon the composite and leaf.
 * It can be used to generate whole menu.
 * 
 * @author Robert Bost <bostrt at tux dot appstate dot edu>
 */

require_once('MenuComposite.php');
require_once('MenuItem.php');

class OtherMenu extends MenuComposite
{
    private $menuCount = 0;
    private $itemCount = 0;

    public function addMenu($text, $tag=null, $parentTag=null)
    {
        if(is_null($tag)){
            // Generate tag.
            $tag = 'menu-'.$this->menuCount;
        }
        if(is_null($parentTag)){
            // $this is parent by default.
            $parentTag = $this->tag;
        }

        // Get parent
        $parent = $this->get($parentTag);

        // Tags must be unique within parent
        if($parent->has($tag)){
            throw new Exception('Tags must be unique within parent. Parent: '.$parentTag.', Tag: '.$tag);
        }

        if(is_null($parent)){
            throw new Exception('Cannot add menu to non-existent parent '.
                                $parentTag);
        }

        // Create the new menu
        $m = new MenuComposite($text, $tag);
        $parent->add($m);

        $this->menuCount++;
    }

    public function addItem($text, $tag=null, $parentTag=null)
    {
        if(is_null($tag)){
            // Generate tag.
            $tag = 'item-'.$this->menuCount;
        }
        if(is_null($parentTag)){
            // $this is parent by default.
            $parentTag = $this->tag;
        }

        // Get parent
        $parent = $this->get($parentTag);

        // Tags must be unique within parent
        if($parent->has($tag)){
            throw new Exception('Tags must be unique within parent. Parent: '.$parentTag.', Tag: '.$tag);
        }

        if(is_null($parent)){
            throw new Exception('Cannot add item to non-existent parent '.
                                $parentTag);
        }

        // Create new item
        $i = new MenuItem($text, $tag);
        $parent->add($i);

        $this->itemCount ++;
    }

    public function getMenuCount(){
        return $this->menuCount;
    }

    public function getItemCount(){
        return $this->itemCount;
    }

}

?>