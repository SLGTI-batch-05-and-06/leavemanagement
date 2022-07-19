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
fullname VARCHAR(255) UNIQUE,
email VARCHAR(255),
department VARCHAR(255),
position VARCHAR(255),
avgleave VARCHAR(255))
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