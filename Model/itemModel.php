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
            $is_available = $row[7];
            $item = new ItemEntity($row[0], $name, $type, $price, $age, $image, $review, $is_available);
            array_push($result_array, $item);
        }
        mysql_close();
        return $result_array;
    }
    
    /**
     * get an item of the given id
     * @param type $id
     */
    function getItemById($id)
    {
        require "Credentials.php";
        $con = mysql_connect($host, $user, $password) or die
                ('Could not connect'.mysql_error());
        $db_selected = mysql_selectdb($database, $con);
        $result = mysql_query("SELECT * FROM item WHERE id = $id") or die
                ('Could not find id'.mysql_error());
        $row = mysql_fetch_array($result);
        $name = $row[1];
        $type = $row[2];
        $price = $row[3];
        $age = $row[4];
        $image = $row[5];
        $review = $row[6];
        
        $resultItem = new ItemEntity($id, $name, $type, $price, $age, $image, $review);
        mysql_close();
        return $resultItem;   
    }
    function insertItem(ItemEntity $item)
    {
        $query = sprintf("INSERT INTO item
                (name, type, price, age, image, review) VALUES
                ('%s','%s', '%s','%s','%s','%s')",
                mysql_real_escape_string($item->name),
                mysql_real_escape_string($item->type),
                mysql_real_escape_string($item->price),
                mysql_real_escape_string($item->age),
                mysql_real_escape_string("Images/Items/".$item->image),
                mysql_real_escape_string($item->review));
        $this->performQuery($query);
    }
    
    function updateItem($id, ItemIdentity $item)
    {
        $query = sprintf("UPDATE item
                SET name = '%s', type = '%s', price = '%s', age = '%s', image = '%s', review = '%s' 
                WHERE id = $id",
                mysql_real_escape_string($item->name),
                mysql_real_escape_string($item->type),
                mysql_real_escape_string($item->price),
                mysql_real_escape_string($item->age),
                mysql_real_escape_string("Images/Items/".$Items->image),
                mysql_real_escape_string($item->review));
        $this->performQuery($query);
    }
    
    function changeAvailability($id, $ava) {
        $query = sprintf("UPDATE item
                SET is_available = '%s' 
                WHERE id = $id",
                mysql_real_escape_string($ava));
        $this->performQuery($query);
    }
    
    function deleteItem($id)
    {
        $query = "DELETE FROM item WHERE id = $id";
        $this->performQuery($query);
    }
    
    function performQuery($query)
    {
        require "Credentials.php";
        /* open connection */
        $con = mysql_connect($host, $user, $password) or die
                ('Could not connect'.mysql_error());
        /* select database */
        $db_selected = mysql_select_db($database, $con);
        /* execute query */
        mysql_query($query) or die ('query failed'.mysql_error());
        /* close connection */
        mysql_close();
    }
}
?>
