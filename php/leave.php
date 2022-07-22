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
    <title>Document</title>
</head>
<body>
<?php include_once('navbar.php');
   include_once('topnav.php'); ?>
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
    <div class="col-sm-3"></div>
    <div class="col-sm-8">
    <div class="card">
    <div class="card-header">
        <h2>Leave details</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
            <form>
             Fullname<input type="text"  class="form-control" name="fullname">
             Phone no<input type="text"  class="form-control" name="phone no">
             Applied no of days<input type="text"  class="form-control" name="applied_no_of_day" >

            </div>
            <div class="col-sm-4">
            Email address<input type="text" class="form-control" name="email">
             Leave type<input type="text"  class="form-control" name="Leavetype">
             Available no of days<input type="text" class="form-control" name="available_no_of_day">
               
            </div>
            <div class="col-sm-4">
            Gender<br>
      <select name=""  class="form-control"  style="width: 100%;">
        <option value="female">Female</option>
        <option value="male">male</option>
      </select>
            Applied date<input type="text" class="form-control" name="applieddate">
           Leave period<input type="text"  class="form-control" name="leavep">
            </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
            Leave reason<br><textarea name="enter your address" rows="05" columns="20"   class="form-control" name="leavereason" style="width:100% ;" ></textarea>
        </div>
        </div>
        HOD Remark <input type="text"  class="form-control" name="hodstatus" >
        Reg Remark<input type="text"   class="form-control" name="regstatus">
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
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" value="Take Action" style="width:100% ;">Take Action</button>
        
        </div>
    </div>
    </div>
    </form>
   
  </div>
  <center>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                               Leave Action Take
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                 <input type="text" name="deptno" class="form-control" required><br><br>
                                                  <textarea name="message" rows="10" columns="10" class="form-control">Description</textarea><br><br>
                                                <center><input type="submit" class="btn btn-primary" name="SUBMIT" value="Register" ></center>
                                                <div class="modal-footer"></div>
                                                </form>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </center>
                    </div>
                </div>
                </div>
                </div>
</body>
</html>