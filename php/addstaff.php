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
    <title>Document</title>
</head>
<body>
<?php include_once('navbar.php'); ?>
<div class="container">
    <?php
            
            if(isset($_POST['save']))//isset meaning equal
            {
              $staffid =$_POST['staffid'];
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $email=$_POST['email'];
              $department=$_POST['department'];
              $position=$_POST['position'];
              $avgleave=$_POST['avgleave'];
              $sql="INSERT INTO  staff(staffid,firstname,lastname,email,department,position,avgleave) VALUES ('$staffid','$firstname','$lastname','$email','$department','$position',$avgleave)";
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
<div class="col-sm-3"></div>
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
      Gender<br>
      <select name=""  class="form-control" style="width: 100%;">
        <option value="female">Female</option>
        <option value="male">male</option>
      </select>
      Date of birth<input type="text" class="form-control" name="dateofbirth">
   NIC<input type="text" class="form-control" name="nc">
   Address<br><textarea name="enter your address" rows="05" columns="20" class="form-control" name="address" ></textarea>
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
Department<input type="text" class="form-control" name="department">
Staff leave days<input type="text" class="form-control" name="avgleave" >
User Role<input type="text" class="form-control" name="position">
profile
<input type="file" class="form-control-file" id="exampleFormControlFile1">
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
</body>
</html>