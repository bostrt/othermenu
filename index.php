<?php
PHPWS_Core::initModClass('othermenu', 'Menu.php');

$menu = new Menu('Main', 'main');
$menu->addSubMenu('Search', 'search');
$menu->addMenuItem('Settings2', 'settings2', 'search');

Layout::add($menu->show());
?>