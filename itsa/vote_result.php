<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php
			include ('side_bar.php');
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vpinternal_id']))
					{
						$_SESSION['vpinternal_id'] = "";
					}
					else
					{
						$_SESSION['vpinternal_id'] = $_POST['vpinternal_id'];
					}
					if(!ISSET($_POST['vpexternal_id']))
					{
						$_SESSION['vpexternal_id'] = "";
					}
					else
					{
						$_SESSION['vpexternal_id'] = $_POST['vpexternal_id'];
					}
					if(!ISSET($_POST['secretary_id']))
					{
						$_SESSION['secretary_id'] = "";
					}
					else
					{
						$_SESSION['secretary_id'] = $_POST['secretary_id'];
					}
					if(!ISSET($_POST['auditor_id']))
					{
						$_SESSION['auditor_id'] = "";
					}
					else
					{
						$_SESSION['auditor_id'] = $_POST['auditor_id'];
					}
					if(!ISSET($_POST['treasurer_id']))
					{
						$_SESSION['treasurer_id'] = "";
					}
					else
					{
						$_SESSION['treasurer_id'] = $_POST['treasurer_id'];
					}
					if(!ISSET($_POST['pio_id']))
					{
						$_SESSION['pio_id'] = "";
					}
					else
					{
						$_SESSION['pio_id'] = $_POST['pio_id'];
					}
					if(!ISSET($_POST['busman_id']))
					{
						$_SESSION['busman_id'] = "";
					}
					else
					{
						$_SESSION['busman_id'] = $_POST['busman_id'];
					}
					if(!ISSET($_POST['sgtarm_id']))
					{
						$_SESSION['sgtarm_id'] = "";
					}
					else
					{
						$_SESSION['sgtarm_id'] = $_POST['sgtarm_id'];
					}

          if(!ISSET($_POST['sgtarm_idd']))
          {
            $_SESSION['sgtarm_idd'] = "";
          }
          else
          {
            $_SESSION['sgtarm_idd'] = $_POST['sgtarm_idd'];
          }


          if(!ISSET($_POST['sgtarm_iddd']))
					{
						$_SESSION['sgtarm_iddd'] = "";
					}
					else
					{
						$_SESSION['sgtarm_iddd'] = $_POST['sgtarm_iddd'];
					}


          if(!ISSET($_POST['sgtarm_idddd']))
					{
						$_SESSION['sgtarm_idddd'] = "";
					}
					else
					{
						$_SESSION['sgtarm_idddd'] = $_POST['sgtarm_idddd'];
					}


				}
		?>
    </div>
			<center>
		  <div class="col-lg-8"  >
		  <div class = "alert btn-info" >
			<label>PRESIDENT</label>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>
			</div>
			<div class = "alert btn-info" >
			<label>VICE PRESIDENT FOR INTERNAL AFFAIRS</label>
			<br />
			<?php
				if(!$_SESSION['vpinternal_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vpinternal_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>
			</div>
			<div class = "alert btn-info" >
			<label>VICE PRESIDENT FOR EXTERNAL AFFAIRS</label>
			<br/>
			<?php
				if(!$_SESSION['vpexternal_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vpexternal_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>

			</div>
			<div class = "alert btn-info" >
			<label>SECRETARY</label>
			<br />
			<?php
				if(!$_SESSION['secretary_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[secretary_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>

			</div>
			<div class = "alert btn-info" >

			<label>AUDITOR</label>
			<br />
			<?php
				if(!$_SESSION['auditor_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[auditor_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>

			</div>
		<div class = "alert btn-info" >
			<label>TREASURER</label>
			<br />
			<?php
				if(!$_SESSION['treasurer_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[treasurer_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>

			</div>
		<div class = "alert btn-info" >
			<label>PIO</label>
			<br />
			<?php
				if(!$_SESSION['pio_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pio_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>
			</div>





		<div class = "alert btn-info" >
			<label>BUSINESS MANAGER</label>
			<br />
			<?php
				if(!$_SESSION['busman_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[busman_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>
			</div>





		<div class = "alert btn-info" >
			<label>FIRST REPRESENTATIVE</label>
			<br />
			<?php
				if(!$_SESSION['sgtarm_id'])
					{

					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sgtarm_id]'")->fetch_array();
            echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
					}
			?>
			</div>



      <div class = "alert btn-info" >
  			<label>SECOND REPRESENTATIVE</label>
  			<br />
  			<?php
  				if(!$_SESSION['sgtarm_idd'])
  					{

  					}
  				else
  					{
  						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sgtarm_idd]'")->fetch_array();
              echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
  					}
  			?>
  			</div>





        <div class = "alert btn-info" >
    			<label>THIRD REPRESENTATIVE</label>
    			<br />
    			<?php
    				if(!$_SESSION['sgtarm_iddd'])
    					{

    					}
    				else
    					{
    						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sgtarm_iddd]'")->fetch_array();
                echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
    					}
    			?>
    			</div>





          <div class = "alert btn-info" >
      			<label>FOURTH REPRESENTATIVE</label>
      			<br />
      			<?php
      				if(!$_SESSION['sgtarm_idddd'])
      					{

      					}
      				else
      					{
      						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sgtarm_idddd]'")->fetch_array();
                  echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />";
      					}
      			?>
      			</div>


			<br />
      <a href = "vote.php" id="back" class = "btn btn-info" ><i class = "fa fa-refresh"> </i> Back</a>
			<button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-info" >Submit Final Vote</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="myModalLabel">
                                  					<div class="panel panel-primary">
                                  						<div class="panel-heading" style="background-color:#242424">
                                  							<center>Vote Candidate</center>
                                  						</div>
                                  					</div>
                                  				</h4>
										</div>



                                        <div class="modal-body">
									Are you sure you want to submit your Votes?
                                    </div>

									<div class="modal-footer">
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-info"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
									</div>
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
</body>
<?php include ('script.php')?>
</html>
