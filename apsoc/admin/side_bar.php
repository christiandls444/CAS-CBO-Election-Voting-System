<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#242424;">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="sr-only" >Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="canvassing.php" style = "color:#fff;"><?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></a>

            </div>


            <ul class="nav navbar-top-links navbar-right" >

               <?php require 'dbcon.php';
				$query = $conn->query("SELECT * from user where user_id ='$session_id'")or die (mysql_error ());

				while ($row = $query->fetch_array()){
			 ?>


            </ul>
			<?php }?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">



                        <li>
                            <a href="canvassing.php"style = "color:#424242;">Canvassing Report</a>
                        </li>

                        <li>
                            <a href="candidate.php"style = "color:#424242;">Candidate List</a>

                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="voters.php"style = "color:#424242;">Voter List</a>

                            <!-- /.nav-second-level -->
                        </li>





                        <li>
                            <a href="#"style = "color:#424242;">User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="user.php"style = "color:#424242;"> > View User</a>
                                </li>
                                <li>
                                    <a href="logout.php" style = "color:#424242;"> > Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
