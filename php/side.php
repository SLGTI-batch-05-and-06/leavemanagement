<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body { font-family:'Poppins', sans-serif ;}

.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #171C3A;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 30px;}
  .sidebar a {font-size:30px;}
}
</style>
</head>
<body>
  
<div class="fixed-top" style="color:blue"></div>
<div class="sidebar">
  <a href="#home"><i class="fa fa-home fa-2X"></i> Dashboard</a><br>
  <a href="#services"><i class="fa fa-building fa-2X"></i> Department</a><br>
  <a href="#calender"><i class="fa fa-calendar fa-2X"></i> Leave </a><br>
  <a href="#users"><i class="fa  fa-users fa-2X"></i> Staff</a><br>
  <a href="#watch"><i class="fa fa-clock-o fa-2X" ></i> Leave</a><br>
  <a href="#envelope"><i class="fa fa-envelope fa-2X"></i> Contact</a>
</div>

<div class="main">

  
</div>
     
</body>
</html> 
