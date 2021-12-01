
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><b>VOTED PAGE</b></h2>

                </div>

				<?php
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
				?>
      
      <a href="voters.php" class = "btn btn-danger btn-outline"></i> ALL VOTERS (<?php echo $count['total']?>)</a>
      <a href="voted.php" class = "btn btn-danger btn-outline">VOTED (<?php echo $count1['total']?>)</a>
      <a href="unvoted.php" class = "btn btn-danger btn-outline"> UNVOTED (<?php echo $count2['total']?>) </a>
      <a  href = "update_status.php"class = "btn btn-danger btn-outline"  name = "go">ACTIVE ALL VOTERS ACCOUNT</a>
      <!--<a  href = "generate_password.php"class = "btn btn-primary btn-outline" name = "go"> Generate Voters Password</a>-->
      <!--<a href="download.php" class="btn btn-primary btn-outline"> Import Data (csv exel file)</a>-->

				<br/>
                <!-- /.col-lg-12 -->


				<hr/>

        <div class="panel panel-default">

            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>

                                <th>STUDENT NO.</th>
                                <!--<th>PASSWORD</th>-->
                                <th>FULLNAME</th>

                                <th>YEAR LEVEL</th>
                                <th>SECTION</th>

                                <th>STATUS</th>
                                <th>ACCOUNT</th>

                            </tr>
                        </thead>
                        <tbody>
        <?php
          require 'dbcon.php';

          $query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
          while($row1 = $query->fetch_array()){
          $voters_id=$row1['voters_id'];
        ?>

          <tr>
            <td><?php echo $row1 ['id_number'];?></td>
            <!--<td><(edit)?php echo $row1 ['password'];?></td>-->
            <td><?php echo $row1 ['firstname']." ". $row1 ['middlename']." ".$row1 ['lastname'];?></td>

            <td><?php echo $row1 ['year_level'];?></td>
            <td><?php echo $row1 ['section'];?></td>

            <td><?php echo $row1 ['status'];?></td>
            <td><?php echo $row1 ['account'];?></td>
          </tr>

                           <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>
    <?php include ('edit_voters_modal.php');?>

</body>

</html>
