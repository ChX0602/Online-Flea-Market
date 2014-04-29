<?php
require "Controllers/ItemController.php";
$itemController = new ItemController();
$title = "Confirm Purchase";
$content = "<form action ='' method ='post'>
    <fieldset>
        <legend>Confirm Purchase</legend>
        <strong>Send your money to our Venmo Account and we'll send a confirmation message afterwards.<><br/>
        <br/>
        <strong>First Name: FleaMarket<><br/>
        <strong>Last Name: CMU<><br/>
        <br/>
        <strong>Confirm your purchase and we'll put the item on hold until money is received.<><br/>
        <br/>
        <input type = 'submit' value = 'Confirm purchase'/>
    </fieldset>
</form>";

$itemController->setNotAvailable($_GET["id"]);

include "Template.php";

?>


