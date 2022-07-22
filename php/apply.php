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
<?php include_once('side.php');
   include_once('topnav.php'); ?>
<div class="container">
<div style="margin-left: 10px; margin-right:10px; padding:10px;">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="card">
<div class="card-header">
        <h2>Staff form</h2>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-sm-4">
            <form>
             First Name<input type="text"  class="form-control" >
            Email address<input type="text"  class="form-control" >
             Applied no of days<input type="text"  class="form-control" >

            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
           
            Last Name<input type="text"  class="form-control" >
           Available leave days<input type="text"  class="form-control" >
            </div>
    </div>
    <div class="row" >
   <div class="col-sm-12">
   Leave type<input type="text"  class="form-control" >
   </div>
     
    
    <div class="row">
        <div class="col-sm-4">
        Start leave date
        <input type="text"  class="form-control" >
        </div>
        <div class="col-sm-4">
       
        </div>
        <div class="col-sm-4">
       End leave date
        <input type="text"  class="form-control" >
        </div>
    </div>
  
    
</div>
<div class="row">
    <div class="col-sm-9">
    Reason for value<br><textarea name="message" name="message" value="message" style="width:70% ; margin-left: 10px;padding:10px;" class="form-control"></textarea>
    
    </div>
    <br>
    <div class="col-sm-3">
    <input type="submit"  value="Save" name="save" class="btn btn-secondary">
    </div>
   
</div>
</div>
</div>
</div>
</div>
</div>