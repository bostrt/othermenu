<?php
require_once('class/OtherMenu.php');
$o = new OtherMenu('Main', 'main');
$o->addItem('Item 1', 'item1');
$o->addItem('Item 4', 'item4');
$o->addMenu('Sub Menu', 'sub1');
$o->addItem('Item 2', 'item2', 'sub1');
$o->addItem('Item 3', 'item3', 'sub1');

echo $o->show();
?>