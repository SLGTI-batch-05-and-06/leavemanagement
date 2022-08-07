

       
  <?php include_once('boostrap-sidebar-03.php'); ?>
  value=<?php echo $deptno;?>
  
  value=<?php echo $$deptshortname;?>

  ?>
            
<div class="alert alert-success col-sm-10" role="alert">
Insert successfull
</div>

?>
<div class="alert alert-danger" role="alert">
  Delete successfull
</div>
<?php



    if(isset($_GET['edit']))
        {
        ?>
        <input type="submit" class="btn btn-primary" value="Save">
        <?php
    }
    else{
        ?>
         <input type="update" class="btn btn-primary" value="Save">
        <?php
    }
 ?>
     //readonly                                               
 <?php  if(isset($_GET['#exampleModal1'])) { ?> readonly <?php} ?> 

 //update
 if(isset($_POST['register']))//isset meaning equal
       {
         $deptno=$_POST['deptno'];
        $deptname=$_POST['deptname'];
         $deptshortname=$_POST['deptshortname'];
         $sql="INSERT INTO department(deptno,deptname,deptshortname) VALUES ('$deptno','$deptname','$deptshortname')";
        if(mysqli_query($con,$sql)) 
         {
           
         Echo "insert successfull";
         }
         else
         {
            echo "error:". mysqli_error($con);
         }
       }
       <div class="card-body">
                    <div class="card bg-light text-dark">
                        Total Staff
                    </div>
                    <img class="card-img" src="../leaveimg/PngItem_1298175.png" style="height:40px; width:40px;">
                </div>
            </div>







            <br>
<div class="card">
<div class="card-header">
        <h2>Staff form</h2>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-sm-4">
            <form>
             First Name<input type="text"  class="form-control" name="firstname" required >
            Email address<input type="text"  class="form-control" name="email"required  >
             Applied no of days<input type="text"  class="form-control" name="no_of_days" >

            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
           
            Last Name<input type="text"  class="form-control" name="lastname" required >
           Available leave days<input type="text"  class="form-control" name="availabale_days">
            </div>
    </div>
    <br>
    <div class="row" >
   <div class="col-sm-4">
   Leave type
   </div>
   <div class="10">
   <input type="text"  class="form-control" name="leavetype" style="width: 100%;" >
   </div>
</div>
     <br>
    
    <div class="row">
        <div class="col-sm-3">
        Start leave date
       </div>
        <div class="col-sm-3">
        <input type="text"  class="form-control" name="startdate" style="width: 100%;">
        </div>
        <div class="col-sm-3">
       End leave date
       </div>
       <div class="col-sm-3">
        <input type="text"  class="form-control" name="startdate">
        </div>
        </div>
    
       <br>
    <div class="row">
    <div class="col-sm-8">
    Reason for value<br><textarea name="message" name="message" value="message" style="width:70% ; margin-left: 10px;padding:10px;" class="form-control"></textarea>
   <br>
    <div class="col-sm-4" style="text-align:left;">
    <input type="submit"  value="Save" name="save" class="btn btn-secondary" style="width:100%;">
    </div>
    </div>
    
   
</div>
  
    
</div>