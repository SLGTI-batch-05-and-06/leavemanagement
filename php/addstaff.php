<?php include_once('script.php');
include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addstaff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
    <title>Document</title>
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
           if(isset($_POST['save']))//isset meaning equal
           {
             $staffid =$_POST['staffid'];
             $firstname=$_POST['firstname'];
             $lastname=$_POST['lastname'];
             $email=$_POST['email'];
             $password=$_POST['pass'];
             $gender=$_POST['gender'];
             $department=$_POST['department'];
             $position=$_POST['position'];
             $avgleave=$_POST['avgleave'];
             $dateofbirth=$_POST['dateofbirth'];
             $nic=$_POST['nic'];
             $Address=$_POST['Address'];
             
               $sql="INSERT INTO  staff(staffid,firstname,lastname,email,pass,gender,department,position,avgleave,dateofbirth,nic,Address) VALUES ('$staffid','$firstname','$lastname','$email','$password','$gender','$department','$position',$avgleave,'$dateofbirth','$nic','$Address')";
             $sql_run = mysqli_query($con,$sql);
             if(mysqli_query($con,$sql)) 
             {
               
             Echo "insert successfull";
             }
             else
             {
                echo "error:". mysqli_error($con);
             }
          
}
            
                    ?>
                    

                    
    
<div style="margin-left: 10px; margin-right:10px; padding:10px;">
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
<div class="col-sm-8">
    <div class="card">
    <div class="card-header">
    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-users fa-2X" style="color:black">Add employee</i>
</a>
</div>

    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-sm-6">
        <form action="" method="post">
      Staff_Id<input type="text" class="form-control" name="staffid">
      First name<input type="text" class="form-control" name="firstname">
      Last name<input type="text" class="form-control" name="lastname">
      Gender<input type="text" class="form-control" name="gender">
      <!--Gender<br>
      <select name=""  class="form-control" style="width: 100%;" name="gender">
        <option value="female">Female</option>
        <option value="male">male</option>
      </select>-->
      Date of birth<input type="date" class="form-control" name="dateofbirth">
   NIC<input type="text" class="form-control" name="nic">
   Address<input type="text" class="form-control" name="Address" style="height:25% ;">
   <br>
   <div class="row">
    <div class="col-sm-6">
    
    </div>
   
   <div class="col-sm-6">
   
   </div>
   </div>
   

</div>
       

<div class="col-sm-6">
Email<input type="text" class="form-control"  name="email">
password<input type="password" class="form-control"  name="pass">
Department<input type="text" class="form-control" name="department">
Staff leave days<input type="text" class="form-control" name="avgleave" >
User Role<input type="text" class="form-control" name="position">
profile
<input type="file" class="form-control-file"  id="exampleFormControlFile1" name="profile">
</div>
</div>
<div class="row">
  <div class="col-sm-6"></div>
  <div class="col-sm-6">
    <div class="row">
    <div class="col-sm-6">
    <form action="staffreg.php" method="post">
    <input type="submit"  value="Save" name="save" class="btn btn-secondary" style="width: 100%;">
    </div>
    <div class="col-sm-6">
    <input type="reset" value="cancel" name="reset" class="btn btn-primary" style="width: 100%;">
    </div>
    </div>
    </div> 
  </div>
  </form>
</div>
</div>
</div>

        </div>

</div>
</div>
</body>
</html>