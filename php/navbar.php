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
    <div class="sidebar ">
    <div class="logo-detail">
    <i class='bx bx-user'>
<span class="logo-name">dfggh</span></i>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
            <i class='bx bx-grid-alt'></i>
            <span class="link-name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="../php/depart.php">
            <i class='bx bx-building'></i>
            <span class="link-name">Department</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-calendar'></i>
            <span class="link-name">Leave management</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-user'></i>
            <span class="link-name">staff</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-stopwatch '></i>
            <span class="link-name">Leave</span>
            </a>
        </li>
        <li>
            <div class="icon-links">
                <a href="#">
                    <i class="bx bx-collection"></i>
                    <span class="icon-links">categor</span>
                </a>
                <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
                <li>
                <li><a  class="link-name" href="#">category </a></li>
                    <li><a  href="#">web design</a></li>
                    <li> <a  href="#">card design</a></li>
                    <li><a href="#">login form</a></li>
                </li>

            </ul>
        </li>
        <li>
            <div class="icon-links">
                <a href="#">
                    <i class="bx bx-book-alt"></i>
                    <span class="icon-links">posts</span>
                </a>
                <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <ul class="sub-menu">
                <li><a  class="link-name" href="#">category </a></li>
                <li><a   href="#">html </a></li>
                <li><a   href="#">php</a></li>
                <li><a   href="#">java</a></li>
        </li>
    </ul>
    </div>
    <section class="home section">
        <div class="home content">
            <i class="bx-bx-menu"></i>
            <span class="text">dropdown sidebar</span>
        </div>
    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        console.log
   (arrow);
    for(var i=0; i < arrow.length; i++){
        arrow[i].addeventlistener("click",(e)=>{
            console.log
        })
    }
    </script>
    
</body>

</html>