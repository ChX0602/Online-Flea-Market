<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require '/Model/Credentials.php';
    $conn = mysql_connect("localhost","root","");
    $db   = mysql_select_db($database,$conn);
    
?>

