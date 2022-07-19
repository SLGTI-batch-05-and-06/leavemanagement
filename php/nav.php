<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">leave</div>
                <i class='bx bx-menu bx-md' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="#">
                <i class='bx bx-home bx-md' id="btn"></i> 
                <span class="link-name">Dashboard</span> 
                </a>
            </li>

            <li>
                <a href="#">
                <i class='bx bx-building bx-md' id="btn"></i> 
                <span class="link-name">Department</span> 
                </a>
            </li>

            <li>
                <a href="#">
                <i class='bx bx-calendar bx-md' id="btn"></i> 
                <span class="link-name">Leave management</span> 
                </a>
            </li>

            <li>
                <a href="#">
                <i class='bx bx-user bx-md' id="btn"></i> 
                <span class="link-name">Staff</span> 
                </a>
            </li>

            <li>
                <a href="#">
                <i class='bx bx-stopwatch bx-md' id="btn"></i> 
                <span class="link-name">Leave</span> 
                </a>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <!--<img src="" alt="">-->
                    <div class="name-job">
                        <div class="name">ranya</div>
                        <div class="job">web developer</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
</body>

</html>