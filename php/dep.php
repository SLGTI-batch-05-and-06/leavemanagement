<?php include_once('script.php');
include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="depart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<?php include_once('nav.php'); ?>
<div class="container">
    <br>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card" style="width:100% ;">
                    <div class="card-header">
                        

                    </div>
                    <div class="card-body">
                    <table class="table table-striped">
                            <div class="table-header">
                                Departmet List
                            
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <div class="icon">

<a href="#" class="icon">
    <i class="fa fa-pencil" style="color:blue"> Edit Department List</i>
    
</a>
</div>
                                          
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            Department Name<br>
                                            <input type="text" name="text" class="form-control" required><br><br>
                                            Department Short Name<br>
                                            <input type="text" name="text" class="form-control" required>
                                            <div class="modal-footer">

                                                <input type="submit" class="btn btn-dark" value="Register" style="width: 100%;">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                
                                    <form>
                                    <tr>
                                        <td>Show </td>
                                        <td><input type="text" class="form-control" style="size:10% ;"> </td>
                                </form>
                                </th>
                                <th colspan="2">
                                    <form>
                                <td>Search:</td>
                                <td><input type="text" class="form-control"></td>
                                </form>
                                </th>


                                <tr>
                                    
                                    <th scope="col">Department No</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Department Short Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="icon">
                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                            <div class="icon">

                                            <a href="#" class="icon">
                                                <i class="fa fa-pencil" style="color:blue"></i></button>
                                                <i class="fa fa-trash o " style="color:black"></i>

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <div class="icon">
                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">


                                        <div class="icon">

                                            <a href="#" class="icon">
                                                <i class="fa fa-pencil " style="color:blue"></i></button>
                                                <i class="fa fa-trash o " style="color:black"></i>

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <div class="icon">
                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">


                                        <div class="icon">

                                            <a href="#" class="icon">
                                                <i class="fa fa-pencil" style="color:blue"></i></button>
                                                <i class="fa fa-trash o " style="color:black"></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
</body>
</html>