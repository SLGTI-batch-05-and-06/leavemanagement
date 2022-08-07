<?php include_once('Script.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
    <title>Admin dashboard</title>
</head>

<body >
<?php include_once('navbar.php');
   include_once('topnav.php'); ?>
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