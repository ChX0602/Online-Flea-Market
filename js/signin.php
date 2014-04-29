<?php include_once("db.php")?>

<?php

    $uname = $_POST['name'];
    $pass = $_POST['pwd'];
    
    $sql = "
        SELECT count(*) FROM userinfo WHERE (
        username='".$uname."' and password='".$pass."')";
            
    $qury = mysql_query($sql);
    
    $result = mysql_fetch_array($qury);
    
    if($result[0]>0) 
    {
        echo "Login successful!";
        echo "<br /><a href='register.html'SignUp</a>";
        echo "<br /><a href='signin'SignIn</a>";
    }
    else
    {
        echo "Login Failed";
    }
   
   
?>