
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
                    <h2 class="page-header"><b>CANVASSING REPORT</b></h2>

                </div>
                       <form method="post" action="sort.php">

			<select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
				<option readonly>----Sort by Position----</option>
				<option>President</option>
				<option>Vice President for External Affairs </option>
				<option>Vice President for Internal Affairs</option>
				<option>Secretary</option>
				<option>Auditor</option>
				<option>Treasurer</option>
				<option>PRO</option>
				<option>Business Manager</option>
				<option>First Peace Officer</option>
        <option>Second Peace Officer</option>



			</select>

			&nbsp;
			&nbsp;
			<button id ="sort" class = "btn btn-info">Sort</button><button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>
</form>
                        <div class="panel-body">


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "btn-info">Candidate for President</td>
						<td style = "width:200px;"class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>



			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for Vice President for Internal</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
			require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for Internal Affairs'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for Vice President for External</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for External Affairs'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for Secretary</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>

			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for Auditor</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Auditor'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>

			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for Treasurer</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Treasurer'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>



			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for PRO</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'PRO'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for Business Manager</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Business Manager'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>



			</table>

			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "btn-info">Candidate for First Peace Officer</td>
						<td style = "width:200px;" class = "btn-info">Image</td>
						<td class = "btn-info">Total</td>

					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'First Peace Officer'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>

			</table>





    <table class="table table-striped table-bordered table-hover ">
        <thead>
          <td style = "width:600px;"class = "btn-info">Candidate for Second Peace Officer</td>
          <td style = "width:200px;" class = "btn-info">Image</td>
          <td class = "btn-info">Total</td>

        </thead>
        <?php
  require 'dbcon.php';
  $query = $conn->query("SELECT * FROM candidate WHERE position = 'Second Peace Officer'");
  while($fetch = $query->fetch_array())
  {
    $id = $fetch['candidate_id'];
    $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
    $fetch1 = $query1->fetch_assoc();

?>
        <tbody>
          <td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
          <td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
          <td style = "width:20px; text-align:center"><button class = "btn btn-info"disabled><?php echo $fetch1 ['total'];?></button>	</td>
        <?php }?>
        </tbody>

    </table>


















							</div>






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

</body>

</html>
