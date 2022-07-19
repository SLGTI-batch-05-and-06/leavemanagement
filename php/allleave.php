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
    <title>Document</title>
</head>
<body>
<div class="container">
<br>
<div style="margin-left: 10px; margin-right:10px; padding:10px;">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-10">
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
                                 //edit
                                $sql="select * from staff";
                                $result=mysqli_query($con,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                 while($row = mysqli_fetch_assoc($result))  //separate ech row
                                 {
                                    echo '<tr>
                                    <td>',$row[''],'</td>
                                    <td>',$row[''],'</td>
                                    <td>',$row[''],'</td>
                                    <td>',$row[''],'</td>
                                    <td>',$row[''],'</td>
                                    <td>
                               <a href="', $row['id'],'"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-pencil" style="color:blue "></i></button></a>  <a href="?delete=', $row['id'],'"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash o" style="color:black"></button></i></a>
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