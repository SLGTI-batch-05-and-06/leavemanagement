<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/depart.css">
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
<br>
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
                    <a href="../php/hod.php"><i class='bx bx-grid-alt'>Dashboard</i></a>
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
                            <a href="../php/addstaff.php">New staff</a>
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
<div class="card-header" style="height: 80px;">
<table class="table table-striped">
<div class="table-header">
ALL LEAVE APPLICATION

                            </div>
                        </table>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-3">
                                        show
                                    </div>
                                    <div class="col-sm-3">
                                    <input type="text" name="text" class="form-control" required> 
                                    </div>
                                    <div class="col-sm-3">
                                        Entries
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    
                                    <div class="col-sm-3">
                                    search
                                    </div>
                                    <div class="col-sm-3">
                                    <input type="text" name="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card-body">
                        <table class="table table-striped" style="width: 100%;">
                        <thead>
                              <tr>
                                <th scope="col">Staff Name</th>
                                <th scope="col">Leave Type</th>
                                <th scope="col">Applied date</th>
                                <th scope="col">HOD Status</th>
                                <th scope="col">reg Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                 
                                 $sql="select * from leave";
                                 $result=mysqli_query($con,$sql);
                                 if(mysqli_num_rows($result)>0)
                                 {
                                  while($row = mysqli_fetch_assoc($result))  //separate each row
                                  {
                                     echo '<tr>
                                     <td>',$row['fullname'],'</td>
                                     <td>',$row['Leavetype'],'</td>
                                     <td>',$row['applieddate'],'</td>
                                     <td>',$row['hodstatus'],'</td>
                                     <td>',$row['regstatus'],'</td>
                                     <td>
                                
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
                        </div>
                        
                        </div>
</div>
</div>
</div>
</div>
</body>
</html>