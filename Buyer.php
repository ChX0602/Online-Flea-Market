<?php


require 'Controllers/ItemController.php';
$itemController = new ItemController();

if (isset($_POST['types']))
{
    $itemTable = $itemController->createtable($_POST['types']);
}
else
{
    $itemTable = $itemController->createtable('%');
}
$title = 'For Buyers';
$content = $itemController->makeDropDownList().$itemTable;
include 'Template.php';
?>
