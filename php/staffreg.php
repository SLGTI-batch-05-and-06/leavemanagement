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
    <title>Document</title>
</head>


<body>
<?php include_once('navbar.php'); ?>
<div class="container">
<div style="margin-left: 10px; margin-right:10px; padding:10px;">
        <div class="row">
            <div class="col-sm-3"></div>
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

                             

                      
