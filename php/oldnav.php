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