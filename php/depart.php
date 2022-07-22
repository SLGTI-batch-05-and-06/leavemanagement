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

<?php include_once('navbar.php');
   include_once('topnav.php'); ?>
    <div class="container">
        <?php
       $deptno=null;
       $deptname=null;
       $deptshortname=null;
        //insert start
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
       //insert finished

       //delete
       if(isset($_GET['delete']))
       {
        $id=$_GET['delete'];
        $sql="DELETE FROM department where id=$id";
        if(mysqli_query($con,$sql))
        {
            ?>
            <div class="alert alert-danger" role="alert" style="margin-left:10px; margin-right:20px; padding:10px;">
              Delete successfull
            </div>
            <?php
        }
        else{
            echo "error". mysqli_error($con);
        }
       }
  //delete finished
 //edit start
 if(isset($_GET['#exampleModal1']))
 {
   $id=$_GET['#exampleModal1'];
   $sql="select * from department WHERE id=$id";
   $result=mysqli_query($con,$sql);
   if(mysqli_fetch_row($result)==1)
   {
       $r=mysqli_num_rows($result);
       $deptno=$row['deptno'];
       $deptname=$row['deptname'];
       $deptshortname=$row['deptshortname'];
   }
 }
 //edit finished
 //update start
 if(isset($_POST['Save']))//isset meaning equal
 {
   $deptno=$_POST['deptno'];
  $deptname=$_POST['deptname'];
   $deptshortname=$_POST['deptshortname'];
   $sql="UPDATE department SET deptno='$deptname', deptshortname='$deptshortname' WHERE deptno='$deptno'";
   
  if(mysqli_query($con,$sql)) 
   {
     
   Echo "update successfull";
   }
   else
   {
      echo "error:". mysqli_error($con);
   }
 }
 //update finished


        ?>
        
        <br>
        <div style="margin-left: 10px; margin-right:10px; padding:10px;">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
               <div class="card-header" style="height: 80px;">
                        <table class="table table-striped">
                            <div class="table-header">
                                Departmet List
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <div class="icon">

                                        <a href="#" class="icon">
                                            <i class="fa fa-plus" style="color:white">Create New</i>
                                        </a>
                                    </div>
                                </button>

                            </div>
                        </table>
                    </div>
                    <br>
                     <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-2">
                                        show
                                    </div>
                                    <div class="col-sm-2">
                                    <input type="text" name="text" class="form-control" required> 
                                    </div>
                                    <div class="col-sm-2">
                                        Entries
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-2">
                                       
                                    </div>
                                    <div class="col-sm-2">
                                    search
                                    </div>
                                    <div class="col-sm-2">
                                    <input type="text" name="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                         <table class="table table-striped" style="width: 100%;">
                           <thead>
                              <tr>
                                <th scope="col">Department No</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Department Short Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php
                                 //edit
                                $sql="select * from department";
                                $result=mysqli_query($con,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                 while($row = mysqli_fetch_assoc($result))  //separate ech row
                                 {
                                    echo '<tr>
                                    <td>',$row['deptno'],'</td>
                                    <td>',$row['deptname'],'</td>
                                    <td>',$row['deptshortname'],'</td>
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
                                 
                                <!--edit popup start######################-->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="icon">

                                                    <a href="#" class="icon">
                                                        <i class="fa fa-pencil" style="color:blue">Edit Department List </i>


                                                </div>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                Department_code<br>
                                                    <input type="text" name="text" class="form-control" value="<?php echo $deptno;?>" required><br><br>
                                                    Department Name<br>
                                                    <input type="text" name="text"  class="form-control" value="<?php echo $deptname;?>"  required><br><br>
                                                    Department Short Name<br>
                                                    <input type="text" name="text"  class="form-control" value="<?php echo $deptshortname;?>" required><br><br>
                                                    <div class="modal-footer">

                                                        <input type="submit" name="Save" class="btn btn-primary" value="Save">
                                                        <input type="reset"  name="reset" class="btn btn-secondary" value="Cancel">
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                              <!--edit popup finished#################-->

                              <!--add popup start#################-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="icon">

                                                    <a href="#" class="icon">
                                                        <i class="fa fa-plus" style="color:blue"> Create New Department </i>

                                                    </a>
                                                </div>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    Department_code<br>
                                                    <input type="text" name="deptno" class="form-control" required><br><br>
                                                    Department Name<br>
                                                    <input type="text" name="deptname" class="form-control" required><br><br>
                                                    Department Short Name<br>
                                                    <input type="text" name="deptshortname" class="form-control" required>
                                                    <div class="modal-footer">

                                                        <input type="submit" class="btn btn-dark" name="register" value="Register" style="width: 100%;">
                                                    </div>
                                                </form>
                                            </div>
                                        </tbody>
                        </table>
                       </div>
                       <!--addpopup finished#################-->
                       </div>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>