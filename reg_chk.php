<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include_once 'system/system.inc.php';
$name=$_POST['name'];
$password=md5($_POST['pwd1']);
$question=$_POST['question'];
$answer=$_POST['answer'];
$realname=$_POST['realname'];
$andrewID=$_POST['andrewID'];
$venmoAccount=$_POST['venmoAccount'];
$sql="insert into tb_user(name,password,question,answer,realname,andrewID,venmoAccount)";
$sql .= "values('$name','$password','$question','$answer','$realname','$andrewID','$venmoAccount')";
$rst = $conn->execute($sql);
if ($rst==false){
    echo '<script>alter(\'fail to add\');history.back</script>';
}
else{
    $_SESSION['member']=$name;
    $_SESSION['id']=$conn->Insert_ID();
    echo '<script>top.opener.location.reload();alert(\'registration success\');window.close();</script>';
}
?>