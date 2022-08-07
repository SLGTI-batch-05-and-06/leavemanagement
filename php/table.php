
<?php
include_once('config.php');
$sql="CREATE TABLE staff
(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
staffid VARCHAR(255) UNIQUE,
firstname VARCHAR(255) ,
lastname VARCHAR(255),
email VARCHAR(255),
pass VARCHAR(10),
gender VARCHAR(10),
department VARCHAR(255),
position VARCHAR(255),
avgleave INT(50),
dateofbirth DATE,
nic VARCHAR(255),
Address VARCHAR(255))
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
