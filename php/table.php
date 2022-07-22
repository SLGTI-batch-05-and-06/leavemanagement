<?php
include_once('config.php');
$sql="CREATE TABLE department
(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
deptno VARCHAR(255) UNIQUE,
deptname VARCHAR(255),
deptshortname VARCHAR(255))
";

if(mysqli_query($con,$sql))
{
    echo"table created";
}
else
{
    echo "error".mysqli_error($con);
}
?>
<?php
include_once('config.php');
$sql="CREATE TABLE staff
(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
staffid VARCHAR(255) UNIQUE,
firstname VARCHAR(255) ,
lastname VARCHAR(255),
email VARCHAR(255),
department VARCHAR(255),
position VARCHAR(255),
avgleave INT(50))
";

if(mysqli_query($con,$sql))
{
    echo"table created";
}
else
{
    echo "error".mysqli_error($con);
}
?>
<?php
include_once('config.php');
$sql="CREATE TABLE leave
(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(255),
Leavetype VARCHAR(255),
applieddate date,
hodstatus VARCHAR(255),
regstatus VARCHAR(255))
";

if(mysqli_query($con,$sql))
{
    echo"table created";
}
else
{
    echo "error".mysqli_error($con);
}
?>