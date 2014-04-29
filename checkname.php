<?php
session_start();
include_once 'system/system.inc.php';//这是database到时候要改
$reback = '0';
$sql = "select * from tb_user_ where name='".$GET['user']."'";
$password = $_GET['password'];
if (!empty($password)) {
    $sql.="and password = '".md5($password)."'";
}
$rst = $conn->Execute($sql) or die('execute error');
if($rst->RecordCount() == 1){
    $reback = '3';
}
if(!empty($password)){
    $_SESSION['member'] = $rst->fields['name'];
    $_SESSION['id'] = $rst->fields['id'];
    $reback = '1';
} else{
    $reback = '2';
}
echo $reback;
?>
