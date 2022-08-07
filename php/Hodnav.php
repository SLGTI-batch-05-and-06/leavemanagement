<?php include_once('script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<div class="wrapper" style="height:100%;">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li>
                    <a href="#"><i class='bx bx-grid-alt'>Dashboard</i></a>
                </li>
                <br>
              
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-calendar'>Leave management</i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                         <a href="#">Apply leave</a>
                        </li>
                        <li>
                            <a href="#">All leave</a>
                        </li>
                        <li>
                            <a href="#">Pending leave</a>
                        </li>
                        <li>
                            <a href="#">Approved leave</a>
                        </li>
                        <li>
                            <a href="#">Rejected leave</a>
                        </li>
                        
                    </ul>
                </li>
                <br>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-user '>Staff</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">New staff</a>
                        </li>
                        <li>
                            <a href="#">Edit staff</a>
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