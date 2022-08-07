<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="modalform">
            <div class="actionbtns">
                <button class="actionbtn signupbtn">signup</button>
                <button class="actionbtn loginbtn">login</button>
                <button class="movebtn">signup</button>
            </div>
            <div class="adminform">
                <?php
                    //insert start
        if (isset($_POST['signup'])) //isset meaning equal
        {
            $firstname= $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $email = $_POST['email'];
            $password = md5($_POST['pass']);
           $sql="INSERT INTO `admin`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')";
           $sql_run= mysqli_query($con,$sql);
            if (mysqli_query($con,$sql)) {

                echo "insert successfull";
            } else {
                echo "error:" .mysqli_error($con);
            }
        }
        //insert finished
                ?>
                <form action="" method="post"class="form signup signupform">
                    <div class="inputgroup">
                        <input type="text" placeholder="firstname" name="firstname" autocomplete="offf">
                    </div>

                    <div class="inputgroup">
                        <input type="text" placeholder="lastname" name="lastname" autocomplete="offf">
                    </div>

                    <div class="inputgroup">
                        <input type="text" placeholder="email" name="email" autocomplete="offf">
                    </div>

                    <div class="inputgroup">
                        <input type="password" placeholder="password" name="pass" autocomplete="offf">
                    </div>
                   
                    <input type="submit" class="btn btn-dark" name="signup" value="signup" style="width: 100%;">
                    <br><br>
                    <a href="../php/login2.php"><input type="sumbit" class="btn btn-primary" value="Back" style="width: 100%;"></a>
                </form>

                <form action="" method="post" class="form login">
                   

                    <div class="inputgroup">
                        <input type="text" placeholder="email" autocomplete="offf">
                    </div>

                    <div class="inputgroup">
                        <input type="password" placeholder="password" autocomplete="offf">
                    </div>
                   
                    <button type="submit" class="submitbtn">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
    <script src="java.js">

        </script>
</body>
</html>