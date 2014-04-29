<?php
require("system.smarty.inc.php");
require("system.class.inc.php");
$connobj=new ConnDB("mysql","localhost","root","root","db_shop",false);
$conn=$connobj->GetConnId();

$admindb=new AdminDB();
$seppage=new SepPage();

$smarty=new SmartyProject();

?>