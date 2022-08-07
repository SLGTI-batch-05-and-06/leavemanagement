<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/depart.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>


<body>
    <div class="container">

    <div style="margin-left: 10px; margin-right:10px; padding:10px;">
    <div class="card bg-dark text-white">
  <img class="card-img" src="../leaveimg/iStock-leave-management_t8waxb.Webp"  alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">
   <a href="../php/login3.php"><input type="sumbit" class="btn btn-primary" value="login"></a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
    STAFF LOGIN
    </button>
    </h5>
    
    
  </div>
</div>
        <div class="row">
       <div class="col-sm-3"></div>
       <div class="col-sm-3">
     
       </div>
       
        </div>
        <br>
        <br>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                               <h1> <center>LOGIN</center></h1>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                   Email<br>
                                                    <input type="text" name="deptno" class="form-control" required><br><br>
                                                    Password<br>
                                                    <input type="text" name="deptname" class="form-control" required><br><br>
                                                    
                                                    <div class="modal-footer">

                                                        <input type="submit" class="btn btn-dark" name="login" value="login" style="width: 100%;">
                                                    </div>
                                                </form>
                                            </div>
                            </div>
                            </div>
                        </div>



                        
    </div>
    </div>
</body>
</html>