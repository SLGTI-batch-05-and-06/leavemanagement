<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/leave.css">
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
 
 //insert start
if(isset($_POST['apply']))//isset meaning equal
{
    $staffid=$_POST['staffid'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $no_of_days=$_POST['no_of_days'];
  $leavetype=$_POST['leavetype'];
  $startdate =$_POST['startdate'];
  $enddate =$_POST['enddate'];
  $reason=$_POST['reason'];
  $sql="INSERT INTO apply(staffid,firstname,lastname,email,no_of_days,leavetype,startdate,enddate,reason,status,hodstatus) VALUES ('$staffid','$firstname','$lastname','$email',$no_of_days,'$leavetype','$startdate','$enddate','$reason','pending','pending')";
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
                    <a href="../php/staff.php"><i class='bx bx-grid-alt'>Dashboard</i></a>
                </li>
                <br>
               
                
              
               <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-user'>Leave</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="../php/apply.php">Apply leave</a>
                        </li>
                        <li>
                            <a href="../php/leavebreak.php">Leave History</a>
                        </li>
                       
                    </ul>
                </li>
                <br>
               
                
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
        Staff Form
    </div>
    <div class="card-body" style="height: 600px;">
    <form action="#" method="post">
        <div class="row">
        <div class="col-sm-6">
            StaffID<input type="text" name="staffid" class="form-control" required>
            </div>
            <div class="col-sm-6">
             Firstname<input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="col-sm-6">
            Lastname<input type="text" name="lastname" class="form-control" required>
            </div>
            <div class="col-sm-6">
           Available Leave days<input type="text" name="no_of_days" class="form-control" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
           Email address<input type="text" name="email" class="form-control" required>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
           Leave types:
          <select name="choose leave type" class="form-control"style="width: 100%;">
          <option value="choose leave type">choose leave type</option>
            <option value="casual leave">casual leave</option>
            <option value="medical leave">medical leave</option>
          </select>
            </div>
           
           
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
            Start Leave Date:<input type="date" name="startdate" class="form-control" required>
            </div>
            <div class="col-sm-6">
           End Leave Date:<input type="date" name="enddate" class="form-control" required>
            </div>
        </div>
        <br>
        <div class="row" >
            <div class="col-sm-10">
            Reason for leave
            </div>
       
        </div>
        <div class="row">
            <div class="col-sm-8">
            <input type="text" name="reason" class="form-control" style="height:130px;">
            </div>
            <div class="col-sm-4">
            
            <input type="submit"  value="Apply Leave" name="apply" class="btn btn-primary"  style="width:100%;">

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