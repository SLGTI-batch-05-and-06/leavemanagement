<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/leave.css">
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
 
        //insert start
       if(isset($_POST['submit']))//isset meaning equal
       {
         $fullname=$_POST['fullname'];
        $Leavetype =$_POST['Leavetype'];
         $applieddate =$_POST['applieddate'];
         $hodstatus =$_POST['hodstatus'];
         $regstatus =$_POST['regstatus'];
         $sql="INSERT INTO leave(fullname,Leavetype,applieddate,hodstatus,regstatus) VALUES ('$fullname','$Leavetype','$applieddate','$hodstatus','$regstatus')";
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
    <div class="col-sm-8">
    <div class="card">
    <div class="card-header">
        <h2>Leave details</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
            <form>
             Fullname<input type="text"  class="form-control" name="fullname" required>
             Phone no<input type="text"  class="form-control" name="phone no" required>
             Applied no of days<input type="text"  class="form-control" name="applied_no_of_day" required>

            </div>
            <div class="col-sm-4">
            Email address<input type="text" class="form-control" name="email" required>
             Leave type<input type="text"  class="form-control" name="Leavetype" required>
             Available no of days<input type="text" class="form-control" name="available_no_of_day" required>
               
            </div>
            <div class="col-sm-4">
            Gender<br>
      <select name="Choose your gender"  class="form-control"  style="width: 100%;" required>
      <option value="female">Choose your gender</option>
        <option value="female">Female</option>
        <option value="male">male</option>
      </select>
            Applied date<input type="text" class="form-control" name="applieddate" required>
           Leave period<input type="text"  class="form-control" name="leavep" required>
            </div>
            </div>
            <br>
        <div class="row">
            <div class="col-sm-3">
            Leave reason
        </div>
        <div class="col-sm-9">
        <textarea name="enter your address" rows="05" columns="20"   class="form-control" name="leavereason" style="width:100% ;" required></textarea>
        </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
            HOD Remark
        </div>
        <div class="col-sm-9">
        <input type="text"  class="form-control" name="hodstatus" >
        </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
            Reg Remark
        </div>
        <div class="col-sm-9">
        <input type="text"   class="form-control" name="regstatus">
        </div>
        </div>
         
        <br>
        <div class="row">
            <div class="col-sm-4">
            Action taken date<input type="text"  class="form-control" name="actiontake">
            </div>
            <div class="col-sm-4">
            Leave status from HOD<input type="text" class="form-control" name="lstatushod">
            </div>
            <div class="col-sm-4">
            Registra/Registry Status<input type="text"  class="form-control" name="rstatus" > 
            </div>
          </div>
          <br>
          <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        
        
        </div>
    </div>
    </div>
    </form>
   
  </div>
  <center>

                    </div>
                </div>
                </div>
                </div>
</body>
</html>