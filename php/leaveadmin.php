<?php include_once('Script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
    <title>Admin dashboard</title>
</head>

<body >
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
                <p></p>
                <li>
                    <a href="../php/leaveadmin.php"><i class='bx bx-grid-alt'>Dashboard</i></a>
                </li>
                <br>
                <li>
                    <a href="../php/depart.php"><i class='bx bx-grid-alt'>Department</i></a>
                </li>
                <br>
                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-calendar'>Leave management</i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                         <a href="../php/all_leave.php">All leave</a>
                        </li>
                    
                    <li>
                         <a href="../php/apply.php">Apply leave</a>
                        </li>
                        <li>
                            <a href="../php/hodall.php">All leave</a>
                        </li>
                      
                        
                    </ul>
                </li>
                <br>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-user '>Staff</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                            <a href="#">Manage staff</a>
                        </li>
                    
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
                <a href="#"><i class='bx bx-stopwatch '>Leave</i></a>
                </li>
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
        <div class="col-sm-10">
                <div class="card bg-light text-white">
                    <img class="card-img" src="../leaveimg/hrms-im.jpg" alt="Card image" style="height:200px; width:350px;">
                    <div class="card-img-overlay">
                        <h1 class="card-title" style="text-align:center; color:black;">Welcome Back</h1>
                        <p class="card-text">
                        <h2 style="text-align:justify; color:black; text-align:center;">Employee Leave Management System </p>

                    </div>
                </div>
                <br>
        <h2>Data Information</h2>
        <br>
        <div class="row">
        <div class="col-sm-3">
            <div class="card-body ">
               <div class="row">
               <div class="col-sm-9 bg-white" style="height:80px; text-align:center; padding:20px; border-radius:10px 0px 0px 10px;">Total staff</div>
                <div class="col-sm-3 bg-dark" style="height:80px; text-align:center; padding:20px; border-radius:0px 10px 10px 0px;" ><i class="fa fa-users fa-2x" style="color:white;"></i></div>
               </div>
               </div>
               </div>

               <div class="col-sm-3">
            <div class="card-body ">
               <div class="row">
               <div class="col-sm-9 bg-white" style="height:80px; text-align:center; padding:20px; border-radius:10px 0px 0px 10px;">Approved Leave</div>
                <div class="col-sm-3 bg-dark" style="height:80px; text-align:center; padding:20px; border-radius:0px 10px 10px 0px;" ><i class="fa fa-hourglass fa-2x" style="color:green;"></i></div>
               </div>
               </div>
               </div>

               <div class="col-sm-3">
               <div class="card-body ">
               <div class="row">
               <div class="col-sm-9 bg-white" style="height:80px; text-align:center; padding:20px; border-radius:10px 0px 0px 10px;">Pending Leave</div>
                <div class="col-sm-3 bg-dark" style="height:80px; text-align:center; padding:20px; border-radius:0px 10px 10px 0px;" ><i class="fa fa-hourglass-half fa-2x" style="color:#6D480B;"></i></div>
               </div>
               </div>
               </div>

               <div class="col-sm-3">
               <div class="card-body ">
               <div class="row">
               <div class="col-sm-9 bg-white" style="height:80px; text-align:center; padding:20px; border-radius:10px 0px 0px 10px;">Rejected Leave</div>
                <div class="col-sm-3 bg-dark" style="height:80px; text-align:center; padding:20px; border-radius:0px 10px 10px 0px;" ><i class="fa fa-hourglass-o fa-2x" style="color:red;"></i></div>
               </div>
               </div>
               </div>

               </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width:100%; padding:10px;">
                   <img class="card-img" src="../leaveimg/PngItem_5444333.png" style="height:30px; width:30px; align:left;">
                    <div class="card-body">
                        <h2>Department Heads</h2>
                    </div>
                </div>


            </div>

            <br>
<p>
            <div class="col-sm-4">
                <div class="card" style="width:100%; padding:10px;">

                    <div class="card-body">
                        <h2>Charts</h2>
                    </div>
                </div>


            </div>


            <br>
<br>
            <div class="col-sm-4">
                <div class="card" style="width:100%; padding:10px;">

                    <div class="card-body">
                        <h2>Staffs</h2>
                    </div>
                </div>


            </div>
            <br>
        </div>

        <br>
        <table class="table table-striped">


<thead>
    <tr>
        <th colspan="7">
            <h2>Leave History</h2>
        </th>
    </tr>
    <tr>
       
    <th scope="col">Staff ID</th>
        <th scope="col">Staff name</th>
        <th scope="col"> Email</th>
        <th scope="col"> no_of_days</th>
        <th scope="col"> start date</th>
        <th scope="col"> End date</th>
        <th scope="col"> reason</th>
        <th scope="col">HOD status</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
            <?php
                                 
                                 $sql="select * from apply";
                                 $result=mysqli_query($con,$sql);
                                 if(mysqli_num_rows($result)>0)
                                 {
                                  while($row = mysqli_fetch_assoc($result))  //separate each row
                                  {
                                     echo '<tr>
                                     <td>',$row['staffid'],'</td>
                                     <td>',$row['lastname'],'</td>
                                     <td>',$row['email'],'</td>
                                     <td>',$row['no_of_days'],'</td>
                                     <td>',$row['startdate'],'</td>
                                     <td>',$row['enddate'],'</td>
                                    <td>',$row['reason'],'</td>
                                    <td>',$row['status'],'</td>
                                     <td>
                                     <a href="../php/approvead.php"><i class="fa fa-eye" style="font-size:18px; color:black;" ></i></a>
                                </td>
                                     </tr>
                                     ';
                                  }
                                 }
                                 else
                                 {
                                     echo "no rows";
                                 }
                                 ?>



               
                   
                    

              
            </tbody>
        </table>
        </div>
        </div>
    </div>

</body>

</html>