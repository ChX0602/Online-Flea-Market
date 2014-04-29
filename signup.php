<?php include_once("db.php")?>

<?php
        $user = $_POST['n'];
        $password = $_POST['p'];
        $id = $_POST['id'];
        $sql = "INSERT into userinfo values('".$user."','".$password."','".$id."')";
        $qury = mysql_query($sql);

        if (!$qury)
        {
            echo "Failed ".mysql_error();
            echo "<br /><a href='signup.php'>SignUpAgain</a>";
        }
        else
        {
            echo "Successful.";
            echo "<br /><a href='index.php'>Back to home page</a>";
        }
     
?>
