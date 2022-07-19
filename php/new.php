

       
  <?php include_once('nav.php'); ?>
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