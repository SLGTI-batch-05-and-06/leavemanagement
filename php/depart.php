<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/depart.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/navig.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>


<body>
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


    <div class="container">
        <?php
        $deptno = null;
        $deptname = null;
        $deptshortname = null;
        //insert start
        if (isset($_POST['register'])) //isset meaning equal
        {
            $deptno = $_POST['deptno'];
            $deptname = $_POST['deptname'];
            $deptshortname = $_POST['deptshortname'];
            $sql = "INSERT INTO department(deptno,deptname,deptshortname) VALUES ('$deptno','$deptname','$deptshortname')";
            if (mysqli_query($con, $sql)) {

                echo "insert successfull";
            } else {
                echo "error:" . mysqli_error($con);
            }
        }
        //insert finished

        //delete
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = "DELETE FROM department where id=$id";
            if (mysqli_query($con, $sql)) {
        ?>
                <div class="alert alert-danger" role="alert" style="margin-left:10px; margin-right:20px; padding:10px;">
                    Delete successfull
                </div>
        <?php
            } else {
                echo "error" . mysqli_error($con);
            }
        }
        //delete finished
       
        //update start
        if (isset($_POST['save'])) //isset meaning equal
        {
            $deptno = $_POST['deptno'];
            $deptname = $_POST['deptname'];
            $deptshortname = $_POST['deptshortname'];
            $sql = "UPDATE department SET deptname='$deptname', deptshortname='$deptshortname' WHERE deptno='$deptno'";

            if (mysqli_query($con, $sql)) {

                echo "update successfull";
            } else {
                echo "error:" . mysqli_error($con);
            }
        }
        //update finished


        ?>

        <br>
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
                    <a href="../php/indexadmin.php"><i class='bx bx-grid-alt'>Dashboard</i></a>
                </li>
                <br>
                <li>
                    <a href="../php/depart.php"> <i class='bx bx-building'>Department</i></a>
                </li>
                <br>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-calendar'>Leave management</i></a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                         <a href="../php/all_leave.php">All leave</a>
                        </li>
                        <li>
                            <a href="#">Approved leave</a>
                        </li>
                        <li>
                            <a href="#">Pending leave</a>
                        </li>
                        <li>
                            <a href="#">Rejected leave</a>
                        </li>
                    </ul>
                </li>
                <br>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='bx bx-user'>staff</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="../php/addstaff.php">New staff</a>
                        </li>
                        <li>
                            <a href="../php/staffreg.php">Manage staff</a>
                        </li>
                       
                    </ul>
                </li>
                <br>
                <li>
                    <a href="#"><i class='bx bx-stopwatch '>Leave</i></a>
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
               
                <div class="col-sm-10">
                    <div class="card-header" style="height: 80px;">
                        <table class="table table-striped">
                            <div class="table-header">
                                Departmet List
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <div class="icon">

                                        <a href="#" class="icon">
                                            <i class="fa fa-plus" style="color:white">Create New</i>
                                        </a>
                                    </div>
                                </button>

                            </div>
                        </table>
                    </div>
                  
                    <!--
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    show
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="text" class="form-control" required>
                                </div>
                                <div class="col-sm-2">
                                    Entries
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">

                                </div>
                                <div class="col-sm-2">
                                    search
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" name="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
    -->
                   
                    <table class="table table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Department No</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Department Short Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //edit
                            $sql = "select * from department";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result))  //separate ech row
                                {
                                    echo '<tr>
                                    <td>', $row['deptno'], '</td>
                                    <td>', $row['deptname'], '</td>
                                    <td>', $row['deptshortname'], '</td>
                                    <td>

                                    <button type="button" class="btn btn-light  editbtn"><i class="fa fa-pencil" style="color:blue "></i></button>     
                               <a href="?delete=', $row['id'], '"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash o" style="color:black"></button></i></a>
                               


                               </td>
                                    </tr>
                                    ';
                                }
                            } else {
                                echo "no rows";
                            }
                            ?>

                            <!--edit popup start######################-->
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="icon">

                                                <a href="#" class="icon">
                                                    <i class="fa fa-pencil" style="color:blue">Edit Department List </i>


                                            </div>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <input type="hidden" name="update_id" id="update_id">
                                                Department_code<br>
                                                <input type="text" name="deptno" id="deptnumber" class="form-control" required><br><br>
                                                Department Name<br>
                                                <input type="text" name="deptname" id="departname" class="form-control" required><br><br>
                                                Department Short Name<br>
                                                <input type="text" name="deptshortname" id="departsname" class="form-control" required>
                                                <div class="modal-footer">
                                                     <div class="row">
                                                        <div class="col-sm-6">
                                                        <input type="submit" class="btn btn-primary" name="save" value="Save" >
                                                        </div>
                                                        <div class="col-sm-6">
                                                        <input type="reset" class="btn btn-secondary" name="cancel" value="Cancel" >
                                                        </div>
                                                     </div>
                                                   
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--edit popup finished#################-->

                            <!--add popup start#################-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="icon">

                                                <a href="#" class="icon">
                                                    <i class="fa fa-plus" style="color:blue"> Create New Department </i>

                                                </a>
                                            </div>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                Department_code<br>
                                                <input type="text" name="deptno" class="form-control" required><br><br>
                                                Department Name<br>
                                                <input type="text" name="deptname" class="form-control" required><br><br>
                                                Department Short Name<br>
                                                <input type="text" name="deptshortname" class="form-control" required>
                                                <div class="modal-footer">

                                                    <input type="submit" class="btn btn-dark" name="register" value="Register" style="width: 100%;">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div>
                <!--addpopup finished#################-->
            </div>
        </div>
    </div>
    </div>
    </div>
     <script>
        $(document).ready(function() {

            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#deptnumber').val(data[0]);
                $('#departname').val(data[1]);
                $('#departsname').val(data[2]);
            });
        });
    </script>


</body>

</html>