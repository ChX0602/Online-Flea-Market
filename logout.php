<?php
session_start();

session_destroy();

if ($_SESSION['userName'])
{
    echo "Successfully logged out!<br />";
    echo "<br /><a href='index.php'>Back to home page</a>";
}
else
    echo "Error occurred!!<br />"
?>

