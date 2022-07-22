<?php include_once('Script.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin dashboard</title>
</head>

<body >
<?php include_once('navbar.php');
   include_once('topnav.php'); ?>
    <div style="margin-left: 10px; margin-right:10px; padding:10px;">
        <div class="row">
        <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="card bg-light text-white">
                    <img class="card-img" src="../leaveimg/hrms-im.jpg" alt="Card image" style="height:200px; width:350px;">
                    <div class="card-img-overlay">
                        <h1 class="card-title" style="text-align:center; color:black;">Welcome Back</h1>
                        <p class="card-text">
                        <h2 style="text-align:justify; color:black; text-align:center;">Employee Leave Management System </p>

                    </div>
                </div>
           
       
        <br>
        <h2>Data Information</h2>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <div class="card bg-light text-white">
                    <img class="card-img" src="../leaveimg/PngItem_1298175.png" style="height:40px; width:40px;">
                    <div class="card-body">
                        Total Staff
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card bg-white text-dark">
                    <img class="card-img" src="../leaveimg/PngItem_1139280.png" style="height:40px; width:40px;">
                    <div class="card-body">
                        Approved Leave
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card bg-White text-dark">
                    <img class="card-img" src="../leaveimg/PngItem_1139280.png" style="height:40px; width:40px;">
                    <div class="card-body">
                        Pending Leave
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card bg-light text-dark">
                    <img class="card-img" src="../leaveimg/PngItem_1139280.png" style="height:40px; width:40px;">
                    <div class="card-body">
                        Rejected Leave
                    </div>
                </div>
            </div>



        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width:100%; padding:10px;">
                   <img class="card-img" src="../leaveimg/PngItem_5444333.png" style="height:30px; width:30px; align:left;">
                    <div class="card-body">
                        <h2>Department Heads</h2>
                    </div>
                </div>


            </div>

            <div class="col-sm-4">
                <div class="card" style="width:100%; padding:10px;">

                    <div class="card-body">
                        <h2>Charts</h2>
                    </div>
                </div>


            </div>

            <div class="col-sm-4">
                <div class="card" style="width:100%; padding:10px;">

                    <div class="card-body">
                        <h2>Staffs</h2>
                    </div>
                </div>


            </div>
        </div>

        <br>


        <br>
        <table class="table table-striped">


            <thead>
                <tr>
                    <th colspan="7">
                        <h2>Leave History</h2>
                    </th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">Staff name</th>
                    <th scope="col"> Leave type</th>
                    <th scope="col"> Applied date</th>
                    <th scope="col"> Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-eye fa-2x" style="color:black"></i>
</a>
</div>
                    </td>
                </tr>



                <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-eye fa-2x" style="color:black"></i>
</a>
</div>
                    </td>
                </tr>


                <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="icon">

                            <a href="#" class="icon">
                                <i class="fa fa-eye fa-2x " style="color:black"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-eye fa-2x" style="color:black" ></i>
</a>
</div>
                    </td>
                </tr>

                <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-eye fa-2x"  style="color:red"></i>
</a>
</div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>

</body>

</html>