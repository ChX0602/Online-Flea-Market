<?php
require "Controllers/ItemController.php";
$itemController = new ItemController();
$title = "Adding a new item";
$content = "<form action ='' method ='post'>
    <fieldset>
        <legend>Add a new item</legend>
        <label for = 'name'>Name: </label>
        <input type = 'text' class = 'inputField' name = 'txtName'/><br/>
        
        <label for = 'type'>Type: </label>
        <select class = 'InputField' name = 'ddlType'>
            <option value = '%'>All</option>"
        .$itemController->getOptionValues($itemController->getItemTypes()).
            "</select><br/>
        
        <label for = 'price'>Price: </label>
        <input type = 'text' class = 'inputField' name = 'txtPrice'/><br/>
        
        <label for = 'age'>Age: </label>
        <input type = 'text' class = 'inputField' name = 'txtAge'/><br/>
        
        <label for = 'image'>Image: </label>
        <select class= 'inputField' name = 'ddlImage'>"
        .$itemController->getImages().
        "</select><br/>
        
        <label for = 'review'>Review: </label>
        <textarea cols = '70' rows= '10' name = 'txtReview'></textarea><br/>
        
        <input type = 'submit' value = 'Submit'/>
    </fieldset>
</form>";

//if (isset($_POST["txtName"]) && isset($_POST["ddlType"]) && isset($_POST["txtPrice"])
//        && isset($_POST["txtAge"]) && isset($_POST["ddlImage"]) && isset($_POST["txtReview"]))
if (isset($_POST["txtName"]))
{
    $itemController->insertItem();
}
include "Template.php";
?>