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
     //delete start
    if(isset($_GET['delete']))
    {
     $id =$_GET['delete'];
     $sql="DELETE FROM staff where id=$id ";
     if(mysqli_query($con,$sql))
     {
         ?>
         <div class="alert alert-danger" role="alert" style="margin-left:10px; margin-right:20px; padding:10px;">
           Delete successfull
         </div>
         <?php
     }
     else
     {
         echo "error". mysqli_error($con);
     }
    }
      //delete finished
   //edit start
   // if(isset($_GET['edit']))
   // {
     // $id=$_GET['edit'];
     // $sql="select * from staff WHERE id=$id";
     // $result=mysqli_query($con,$sql);
     // if(mysqli_fetch_row($result)==1)
     // {
          //$r=mysqli_num_rows($result);
         // $staffid =$_POST['staffid'];
               //  $firstname=$_POST['firstname'];
                // $lastname=$_POST['lastname'];
               //  $email=$_POST['email'];
                // $department=$_POST['department'];
                // $position=$_POST['position'];
              //   $avgleave=$_POST['avgleave'];
               //  $dateofbirth=$_POST['dateofbirth'];
               //  $nic=$_POST['nic'];
               //  $Address=$_POST['Address'];
      //}
    //}
    //edit finished
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
                            <a href="../php/navistaff.php">New staff</a>
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
    <div class="card-header" style="height: 80px;">
    
    <table class="table table-striped">
                            <div class="table-header">
                        <p>Administration Break down</p>
                        <form action="../php/addstaff.php" method="$_POST">
                       <input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" value="+Add staff" i class="fa fa-plus" style="color:white"></i>
                        
                       
                        </button>
                        </form>

</div>
</table>
</div>
<br>
<div class="card">
    
                    
                        <table class="table table-striped">
                        <thead>
                                    <tr>
                                       
                                        <th scope="col">Fullname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Department </th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Avg Leave</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?php
                                 
                                 $sql="select * from staff";
                                 $result=mysqli_query($con,$sql);
                                 if(mysqli_num_rows($result)>0)
                                 {
                                  while($row = mysqli_fetch_assoc($result))  //separate each row
                                  {
                                     echo '<tr>
                                     <td>',$row['lastname'],'</td>
                                     <td>',$row['email'],'</td>
                                     <td>',$row['department'],'</td>
                                     <td>',$row['position'],'</td>
                                     <td>',$row['avgleave'],'</td>
                                     <td>
                                     
                                     <a href="#exampleModal1', $row['id'],'"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-ellipsis-h" style="color:blue "></i></button></a> 
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
                            <div class="row">
                                <div class="col-sm-3">
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content"  style="width: 80px ;">
                                            
                                            
                                                <form action="../php/editstaff.php" method="post">
                                                     
                                                <a href="../php/editstaff.php"><i class="fa fa-pencil" name="edit" style="color:blue ;margin-left:5px;"></i></a>
                                                <a href="?edit=', $row['id'],'">   <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-trash-o "  style="color:blue ;margin-left:5px;"></i></a></button>
                                                    
                                                    
                                                 
                                                    
                                                    <div class="modal-footer">

                                                        
                                                        
                                                    </div>
                                                </form>
                                            


                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                           
                            </div>
                            </div>
                                </body>
                                </html>

                             

                      
