<?php include_once('script.php');
include_once('sidebar.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  fgcghvhjjkhkjhbjgvhfvhg
</body>
</html>
<?php
            
            if(isset($_POST['save']))//isset meaning equal
            {
              $staffid =$_POST['staffid'];
              $profile =$_FILES["exampleFormControlFile1"]['name'];
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $email=$_POST['email'];
              $password=$_POST['pass'];
              $department=$_POST['department'];
              $position=$_POST['position'];
              $avgleave=$_POST['avgleave'];
              $dateofbirth=$_POST['dateofbirth'];
              $nic=$_POST['nic'];
              $Address=$_POST['Address'];
              if(file_exists("images/" . $_FILES["profile"]['name'])){
                $store = $_FILES["profile"]['name'];
              } else {
                $sql="INSERT INTO  staff(staffid,profile,firstname,lastname,email,pass,department,position,avgleave,dateofbirth,nic,Address) VALUES ('$staffid','$profile',$firstname','$lastname','$email','$password','$department','$position',$avgleave,'$dateofbirth','$nic','$Address')";
              $sql_run = mysqli_query($con,$sql);

              if($sql_run){
                move_uploaded_file($_FILES["exampleFormControlFile1"]['tmp_name'],"image" . $_FILES["exampleFormControlFile1"]);
                echo "insert successfully";


              }else{
                echo "error:" . mysqli_errno($con);
              }
            }
              
        }
            
                    ?>




if(isset($_POST['save']))//isset meaning equal
            {
              $staffid =$_POST['staffid'];
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $email=$_POST['email'];
              $password=$_POST['pass'];
              $department=$_POST['department'];
              $position=$_POST['position'];
              $avgleave=$_POST['avgleave'];
              $dateofbirth=$_POST['dateofbirth'];
              $nic=$_POST['nic'];
              $Address=$_POST['Address'];
              
                $sql="INSERT INTO  staff(staffid,firstname,lastname,email,pass,department,position,avgleave,dateofbirth,nic,Address) VALUES ('$staffid','$firstname','$lastname','$email','$password','$department','$position',$avgleave,'$dateofbirth','$nic','$Address')";
              $sql_run = mysqli_query($con,$sql);
              if(mysqli_query($con,$sql)) 
              {
                
              Echo "insert successfull";
              }
              else
              {
                 echo "error:". mysqli_error($con);
              }
           
}


.sidebar ul li .tooltip{
    position: absolute;
    left: 122px;
    top:0;
    transform: translateY(-50%);
    border-radius: 6px;
    height: 35px;
    width: 122px;
    background: #fff;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    transition: 0s;
    opacity: 0;
    pointer-events: none;

}

.sidebar ul li:hover.tooltip{
    transition: all 0.5s ease;
    top: 50%;
    opacity: 1;

}

.sidebar  ul li .bx-search:hover{
background: #fff;
color: #1d1b31;

}
.sidebar .active #btn{
left: 90%;

}

.sidebar .active{
    width:  240px;
}
.sidebar .active .logo_content .logo{
    opacity: 1;
    pointer-events: none;
}

//
            if(isset($_POST['save']))//isset meaning equal
            {
              $staffid =$_POST['staffid'];
              $profile =$_FILES["profile"]['name'];
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $email=$_POST['email'];
              $password=$_POST['pass'];
              $department=$_POST['department'];
              $position=$_POST['position'];
              $avgleave=$_POST['avgleave'];
              $dateofbirth=$_POST['dateofbirth'];
              $nic=$_POST['nic'];
              $Address=$_POST['Address'];
              if(file_exists("../upload/".$_FILES["profile"]['name'])){
                $store = $_FILES["profile"]['name'];
              } else {
                $sql="INSERT INTO `staff`(`id`, `profile`, `staffid`, `firstname`, `lastname`, `email`, `pass`, `department`, `position`, `avgleave`, `dateofbirth`, `nic`, `Address`) VALUES ('$staffid','$profile',$firstname','$lastname','$email','$password','$department','$position',$avgleave,'$dateofbirth','$nic','$Address')";
              $sql_run = mysqli_query($con,$sql);

              if($sql_run){
                move_uploaded_file($_FILES["profile"]['tmp_name'],"../upload/".$_FILES["profile"]['name']);
                echo "insert successfully";


              }else{
                echo "error:" . mysqli_errno($con);
              }
            }
              
        }

        //edit start
        if (isset($_GET['#exampleModal1'])) {
            $id = $_GET['#exampleModal1'];
            $sql = "select * from department WHERE id=$id";
            $result = mysqli_query($con, $sql);
            if (mysqli_fetch_row($result) == 1) {
                $r = mysqli_num_rows($result);
                $deptno = $row['deptno'];
                $deptname = $row['deptname'];
                $deptshortname = $row['deptshortname'];
            }
        }
        //edit finished