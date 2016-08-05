<?php

#including both Classes
include_once './LinkList.php';
include_once './LinkNode.php';


#initialising a new LinkList object
$obj = new LinkList();

#inserting LinkNode objects
$obj->insert("Gofreti", 0);
$obj->insert("Krem karamel", 1);
$obj->insert("Mlqko s oriz", 2);
$obj->insert("Cedeno mlqko s borovinki", 3);
$obj->insert("Dinq", 4);
$obj->insert("Pypesh", 5);
$obj->insert("Palachinki", 6);

#printing the result
echo '<h4>Linked list result</h4>';
echo '<pre>';
print_r($obj->readList());
echo '</pre>';

#other available methods
$obj->insertFirst("Tolumbichki");
$obj->findNodeByIndex(3);
$obj->findNodeByInfo("Cedeno mlqko s borovinki");
$obj->displayChild("Krem karamel"); # || $obj->displayChild(1);
$obj->deleteFirstNode();
$obj->deleteLastNode();
$obj->deleteNodeByInfo("Mlqko s oriz");
$obj->deleteNodeByIndex(5);
