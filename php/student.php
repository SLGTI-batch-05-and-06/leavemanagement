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
<div class="container">
<?php
   
        //insert start
       if(isset($_POST['save']))//isset meaning equal
       {
         $studentid=$_POST['studentid'];
        $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
         $address=$_POST['address'];
         $phoneno=$_POST['phoneno'];
         $gender=$_POST['gender'];
         $sql="INSERT INTO student(studentid,firstname,lastname,address,phoneno,gender) VALUES ('$studentid','$firstname','$lastname','$address','$phoneno','$gender')";
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
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
               <div class="card-header" style="height: 80px;">
                        <table class="table table-striped">
                            <div class="table-header">
                              student List
</div>
<div class="card-body">
    <div class="row">
        <div class="col-sm-6">
        <form >
    studentid<input type="text" class="form-control" name="staffid">
      First name<input type="text" class="form-control" name="firstname">
      Last name<input type="text" class="form-control" name="lastname">
      

    </div>
    <div class="col-sm-6">
    address<input type="text" class="form-control" name="lastname">
     phone no<input type="text" class="form-control" name="lastname">
    gender<input type="text" class="form-control" name="lastname">
    <br>
    <div class="row">
    <div class="col-sm-6">
    <input type="submit"  value="Save" name="save" class="btn btn-secondary" style="width: 100%;">
    </div>
    <div class="col-sm-6">
    <input type="reset" value="cancel" name="reset" class="btn btn-primary" style="width: 100%;">
    </div>
    </div>
    
   
  
    </div>
  <br>
  
    
    
    </form>
</div>
<table class="table table-striped" style="width: 100%;">
                           <thead>
                              <tr>
                                <th scope="col">student id</th>
                                <th scope="col">firstName</th>
                                <th scope="col">lastName</th>
                                <th scope="col">Address</th>
                                <th scope="col">phone no</th>
                                <th scope="col">gender</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php
                                 //edit
                                $sql="select * from student";
                                $result=mysqli_query($con,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                 while($row = mysqli_fetch_assoc($result))  //separate ech row
                                 {
                                    echo '<tr>
                                    <td>',$row['studentid'],'</td>
                                    <td>',$row['firstName'],'</td>
                                    <td>',$row['lastName'],'</td>
                                    <td>',$row['Address'],'</td>
                                    <td>',$row['phoneno'],'</td>
                                    <td>',$row['gender'],'</td>
                                    <td>
                               <a href="#exampleModal1', $row['id'],'"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-pencil" style="color:blue "></i></button></a>  <a href="?delete=', $row['id'],'"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash o" style="color:black"></button></i></a>
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
<body>