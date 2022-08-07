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
 
        //updatestart
        if(isset($_POST['approve']))//isset meaning equal
        {
        $staffid =$_POST['staffid1'];
        $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $department=$_POST['department'];
         $position=$_POST['position'];
        $avgleave=$_POST['avgleave'];
        $dateofbirth=$_POST['dateofbirth'];
         $nic=$_POST['nic'];
         $Address=$_POST['Address'];
          $sql="UPDATE `apply` SET `regstatus`='pending' WHERE staffid='$staffid'";
          
         if(mysqli_query($con,$sql)) 
          {
            
          Echo "update successfull";
          }
          else
          {
             echo "error:". mysqli_error($con);
          }
        }


        if(isset($_POST['reject']))//isset meaning equal
 {
 $staffid =$_POST['staffid1'];
 $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $department=$_POST['department'];
  $position=$_POST['position'];
 $avgleave=$_POST['avgleave'];
 $dateofbirth=$_POST['dateofbirth'];
  $nic=$_POST['nic'];
  $Address=$_POST['Address'];
   $sql="UPDATE `apply` SET `status`='pending' WHERE staffid='$staffid'";
   
  if(mysqli_query($con,$sql)) 
   {
     
   Echo "update successfull";
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
                    <a href="#"><i class='bx bx-grid-alt'>Dashboard</i></a>
                </li>
                <br>
                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-calendar'>Leave management</i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                         <a href="#">Apply leave</a>
                        </li>
                        <li>
                            <a href="../php/all_leave.php">All leave</a>
                        </li>
                        <li>
                            <a href="#">Pending leave</a>
                        </li>
                        <li>
                            <a href="#">Approved leave</a>
                        </li>
                        <li>
                            <a href="#">Rejected leave</a>
                        </li>
                        
                    </ul>
                </li>
                <br>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-user '>Staff</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">New staff</a>
                        </li>
                        <li>
                            <a href="#">Edit staff</a>
                        </li>
                       
                    </ul>
                </li>
                <br>
                <li>
                    <a href="#">Extra</a>
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
        Staff Form
    </div>
    <div class="card-body" style="height: 510px;">
    <form action="#" method="post">
        <div class="row">
            <div class="col-sm-6">
             Firstname<input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="col-sm-6">
            Lastname<input type="text" name="lastname" class="form-control" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6">
           Email address<input type="text" name="email" class="form-control" required>
            </div>
            <div class="col-sm-6">
           Available Leave days<input type="text" name="no_of_days" class="form-control" required>
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
            Start Leave Date:<input type="text" name="startdate" class="form-control" required>
            </div>
            <div class="col-sm-6">
           End Leave Date:<input type="text" name="enddate" class="form-control" required>
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
        <button type="button" class="btn btn-secondary" name="submit" data-toggle="modal" data-target="#exampleModal" value="Take Action" style="width:100% ;">Take Action</button>
        
        </div>
           
            
        </div>
    </div>
</form>
</div>
</div>
  <center>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                               Leave Action Take
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../php/approve.php" method="post">
                                                 <input type="text" name="deptno" class="form-control" required><br><br>
                                                  <textarea name="message" rows="10" columns="10" class="form-control">Description</textarea><br><br>
                                                <input type="submit" class="btn btn-success" name="SUBMIT" value="Approved" >
                                                <input type="submit" class="btn btn-danger" name="SUBMIT" value="Rejected" >
                                                <div class="modal-footer"></div>
                                                </form>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </center>
                    </div>
                </div>
                </div>
                </div>
</body>
</html>