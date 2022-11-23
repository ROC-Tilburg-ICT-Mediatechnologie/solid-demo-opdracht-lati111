<?php

require_once("classes/Item.php");
require_once("classes/Order.php");
require_once("classes/OrderController.php");

$orderController = new OrderController();

//Mock data die je kunt gebruiken om te testen.
$item1 = new Item(1, "Microsoft Surface pro 4", 1016.99);
$item2 = new Item(2, "JBL Bluetooth speakers", 60.00);
$item3 = new Item(3, "Logitch G502 HERO gaming muis", 44.99);

$order1 = new Order(1, "j. Janssen", [$item1, $item3]);
$order2 = new Order(2, "B. Bastiaans", [$item2, $item3]);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SOLID demo code</title>
    </head>
    <body>
        
    </body>
</html>