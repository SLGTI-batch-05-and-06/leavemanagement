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
<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

    </script>
<?php include_once('navbar.php');
   include_once('topnav.php'); ?>
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
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-stopwatch '>Leave</i></a>
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
                <h1 class="card-title" style="text-align:left; color:black;">Leave Breakdown</h1>
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
               <br>

                </div>
                <br>
                <br>
                <div class="card">
    
                    
                        <table class="table table-striped">
                        <thead>
                                    <tr>
                                       
                                        <th scope="col">Leave Type</th>
                                        <th scope="col">Date from</th>
                                        <th scope="col">Date to </th>
                                        <th scope="col">no of days</th>
                                        <th scope="col">Hod Status</th>
                                        <th scope="col">Reg Status</th>
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
                                     <td>',$row['leavetype'],'</td>
                                     <td>',$row['startdate'],'</td>
                                     <td>',$row['enddate'],'</td>
                                     <td>',$row['no_of_days'],'</td>
                                     <td>',$row['HODstatus'],'</td>
                                     <td>',$row['Regstatus'],'</td>
                                     <td>
                                     <a href="../php/leave.php"><i class="fa fa-eye" style="color:black "></i></a> 
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
   
       
        
       
                               
                             
</table>
</div>


                   </div>
                   </div>
                   </div>
                            </body>
                            </html>
                  
             