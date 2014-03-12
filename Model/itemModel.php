<?php
require("Entities/ItemEntity.php");
class itemModel {
    function getItemTypes()
    {
        require 'Credentials.php';
        $con = mysql_connect($host, $user, $password);
        if (!$con)
        {
            die ('Could not connect: '.mysql_error());
        }
        $db_selected = mysql_select_db($database, $con);
        $result = mysql_query("SELECT DISTINCT type FROM item");
        $types = array();
        while ($row = mysql_fetch_array($result))
        {
            array_push($types, $row[0]);
        }
        mysql_close();
        return $types;
    }
    
    function getItemByType($type)
    {
        require 'Credentials.php';
        $con = mysql_connect($host, $user, $password);
        if (!$con)
        {
            die ('Could not connect: '.mysql_error());
        }
        $db_selected = mysql_selectdb($database, $con);
        $result = mysql_query("SELECT * FROM item WHERE type LIKE '$type'") or die ('Could not find type'.mysql_error());
        $result_array = array();
        
        while($row = mysql_fetch_array($result))
        {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $age = $row[4];
            $image = $row[5];
            $review = $row[6];
            $item = new ItemEntity(-1, $name, $type, $price, $age, $image, $review);
            array_push($result_array, $item);
        }
        mysql_close();
        return $result_array;
    }
}
