<?php include_once("db.php");
$title = "";
$content = "";
        $user = $_POST['n'];
        $password = $_POST['p'];
        $id = $_POST['id'];
        $sql = "INSERT into userinfo values('".$user."','".$password."','".$id."')";
        $qury = mysql_query($sql);

        if (!$qury)
        {
            $content = "Failed ".mysql_error()
           ."<br /><a href='signup.php'>SignUpAgain</a>";
        }
        else
        {
            $content = 
           "Successful.
            <br /><a href='index.php'>Back to home page</a>";
        }
     include "Template.php";
?>
