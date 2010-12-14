<?php
PHPWS_Core::initModClass('othermenu', 'OtherMenu.php');
require_once('class/OtherMenu.php');
$o = new OtherMenu('Main', 'main');
$o->addItem('Item 1', 'item1');
$o->addItem('Item 4', 'item4');
$o->addMenu('Sub Menu', 'sub1');
$o->addItem('Item 2', 'item2', 'sub1');
$o->addItem('Item 3', 'item3', 'sub1');
$o->addmenu('Sub Sub Menu', 'sub2', 'sub1');
$o->addItem('Item345', 'item4', 'sub2');
$o->addmenu('Sub Sub Sub Menu', 'sub2', 'sub2');

echo $o->show();
?>