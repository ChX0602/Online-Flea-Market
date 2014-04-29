<!DOCTYPE html>
<?php
$title = "Home";
$content = 
    '<form action="signin.php" method="post">
        username: <input type="text" name="name"><br />
        password: <input type="password" name="pwd"><br />
        <input type="submit" value="sign in!">
        </form>';
include 'Template.php';
            
?>


