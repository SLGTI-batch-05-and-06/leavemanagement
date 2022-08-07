<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
    <title>Document</title>
</head>
<style>
  
   
</style>
    </head>
<body>

<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

    </script>
    <div class="container">
    <?php
            
            if(isset($_POST['update']))//isset meaning equal
            {
            echo    $staffid =$_POST['staffid1'];
            echo  $firstname=$_POST['firstname'];
            echo  $lastname=$_POST['lastname'];
            echo $email=$_POST['email'];
            echo  $pass=$_POST['pass'];
            echo $department=$_POST['department'];
            echo  $position=$_POST['position'];
            echo $avgleave=$_POST['avgleave'];
            echo $dateofbirth=$_POST['dateofbirth'];
            echo  $nic=$_POST['nic'];
            echo $Address=$_POST['Address'];
              $sql="UPDATE `staff` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email', `pass`='$pass',`department`='$department',`position`='$position',`avgleave`='$avgleave',`dateofbirth`='$dateofbirth',`nic`='$nic',`Address`='$Address' WHERE staffid='$staffid'";
              
             if(mysqli_query($con,$sql)) 
              {
                
              Echo "update successfull";
              }
              else
              {
                 echo "error:". mysqli_error($con);
              }
            }
            //update finished

//search
if(isset($_POST['search']))
{
    $staffid = $_POST['staffid'];
    $sql= "SELECT* FROM staff WHERE staffid='$staffid'";
    $sql_run = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($sql_run));
    {

    }
}
         

            
                    ?>
        <div class="row">
            <div class="col-sm-2">
            
            
<div class="wrapper" style="height:100%;">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li>
                    <a href="../php/indexadmin.php"><i class='bx bx-grid-alt'>Dashboard</i></a>
                </li>
                <br>
                <li>
                    <a href="../php/depart.php"> <i class='bx bx-building'>Department</i></a>
                </li>
                <br>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-calendar'>Leave management</i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                         <a href="../php/all_leave.php">All leave</a>
                        </li>
                        <li>
                            <a href="#">Approved leave</a>
                        </li>
                        <li>
                            <a href="#">Pending leave</a>
                        </li>
                        <li>
                            <a href="#">Rejected leave</a>
                        </li>
                    </ul>
                </li>
                <br>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-user'>staff</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">New staff</a>
                        </li>
                        <li>
                            <a href="../php/staffreg.php">Manage staff</a>
                        </li>
                       
                    </ul>
                </li>
                <br>
                <li>
                    <a href="#"><i class='bx bx-stopwatch '>Leave</i></a>
                </li>
                
            </ul>
            <br>

            <ul class="list-unstyled CTAs">
                <li>
                <a href="#">visit us</a>
                </li>
               
            </ul>
        </nav>
        </div>
</div>
<BR>
            <div class="col-sm-8">
                <br>
            <div class="card">
    <div class="card-header">
    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-pencil fa-2X" style="color:royalblue;">Edit employee</i>
</a>
</div>

    </div>
    <BR>
                <center>
        <form action="" method="post">
        <input type="text" class="form-control" name="staffid" placeholder="enter your id"  style="width: 50%;"><br>
        <input type="submit" class="btn btn-success" name="search" value="search" style="width: 50%;"><br>
       
        </center>
        <?php
        if(isset($_POST['search']))
{
    $staffid = $_POST['staffid'];
    $sql= "SELECT* FROM staff WHERE staffid='$staffid'";
    $sql_run = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($sql_run))
    {
         ?>
                <div class="card-body" >
        <div class="row">
        
        <div class="col-sm-6">
        <form action="" method="post">
    staffid<input type="text" class="form-control" name="staffid1" value="<?php echo $row['staffid']?>" style="width: 50%;">
    First name<input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']?>">
    Last name<input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']?>">
    Gender<input type="text" class="form-control" name="gender" value="<?php echo $row['gender']?>">
    Date of birth<input type="text" class="form-control" name="dateofbirth" value="<?php echo $row['dateofbirth']?>">
   NIC<input type="text" class="form-control" name="nic" value="<?php echo $row['nic']?>">
   Address<input type="text" class="form-control" name="Address" value="<?php echo $row['Address']?>" style="height:25% ;">
   <br>
  </div>

<div class="col-sm-6">
Email<input type="text" class="form-control"  name="email" value="<?php echo $row['email']?>">
Password<input type="password" class="form-control"  name="pass" value="<?php echo $row['pass']?>">
Department<input type="text" class="form-control" name="department" value="<?php echo $row['department']?>">
Staff leave days<input type="text" class="form-control" name="avgleave" value="<?php echo $row['avgleave']?>">
User Role<input type="text" class="form-control" name="position" value="<?php echo $row['position']?>">
profile
<input type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $row['position']?>">
</div>

    </div>
    <div class="row">
  <div class="col-sm-6"></div>
  <div class="col-sm-6">
    <div class="row">
    <div class="col-sm-6">
    <form action="staffreg.php" method="post">
    <input type="submit"  value="Update" name="update" class="btn btn-danger" style="width: 100%;">
    </div>
    <div class="col-sm-6">
    <input type="reset" value="cancel" name="reset" class="btn btn-dark" style="width: 100%;">
    </div>
    </div>
    </div> 
  </div>
    </div>  
    </form> 
    </form>             
    </div>
    </div>

         <?php
    }
}
?>
    
            
       
    
    </div>
                </div>
                </div>
</div>

        </div>

</div>
</div>
          
    
       
            
    


</body>
</html>