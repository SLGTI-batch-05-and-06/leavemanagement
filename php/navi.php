<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navi.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class="bx bxl-c-plus-plus"></i>
                <div class="logo_name">codinglab</div>
                 </div>
                 <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
               
                    <i class="bx bx-search">
                    <input type="text" placeholder="search">
                    </i>
                   
                
                <!--<span class="tooltip">Dashboard</span>-->
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="link_name">user</span>
                </a>
                <span class="tooltip">user</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chart"></i>
                    <span class="link_name">message</span>
                </a>
                <span class="tooltip">message</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="link_name">analytics</span>
                </a>
                <span class="tooltip">analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">file manager</span>
                </a>
                <span class="tooltip">file manager</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart-alt"></i>
                    <span class="link_name">order</span>
                </a>
                <span class="tooltip">order</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-heart"></i>
                    <span class="link_name">saved</span>
                </a>
                <span class="tooltip">saved</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">settings</span>
                </a>
                <span class="tooltip">settings</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                   <imag class="../leaveimg/hrms-im.jpg" alt="">
                    <div class="name_job">
                        <div class="name">ranya</div>
                        <div class="job">web developer</div>
                    </div>
              </div>
              <i class="bx bx-log-out" id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">home content</div>
    </div>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search")
      

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        searchbtn.onclick = function(){
            sidebar.classList.toggle("active");
     }
    </script>
</body>
</html>