<?php
//host','username','password','databasename'
$con=mysqli_connect('localhost','root','','leave');
if (mysqli_connect_errno())
{
    echo ("database connection error");
}
?>