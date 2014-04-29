<?php include("db.php");
session_start();

$title = "";


    $uname = $_POST['name']; 
    $pass = $_POST['pwd'];
    
    $sql = "SELECT count(*) FROM userinfo WHERE(
        user='".$uname."' and password='".$pass."')";
            
    $qury = mysql_query($sql);
    
    $result = mysql_fetch_array($qury);
    $content="";
    if($result[0]>0) 
    {
        $_SESSION['userName'] = $uname;
        $content = "
        Login successful!
        <br />Welcome ".$_SESSION['userName']."!
       <br /><a href='index.php'>Back to home page</a>
       <br /><a href='logout.php'>LogOut</a>";
    }
    else
    {
        $content = "Login Failed
       <br /><a href='index.php'>Back to home page</a>;
        <br /><a href='register.php'>Register!</a>";
    }
include "Template.php";
?>