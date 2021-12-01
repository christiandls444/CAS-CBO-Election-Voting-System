<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading" style="background-color:#242424"><center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body" >
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info"  style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info"  style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
              <center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div>

						<?php
							}
						?>

						</div>

                    </div>
     </div>


				<div class="col-lg-6">

                    <div class="panel panel-primary">
                      <div class="panel-heading" style="background-color:#242424"><center>

							VICE PRESIDENT FOR INTERNAL AFFAIRS</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President for Internal Affairs'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px">
      <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
      <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpinternal_id" class = "vpinternal"></center>
		</div>
						<?php
							}
						?>

						</div>

                    </div>
                </div>



	<div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
VICE PRESIDENT FOR EXTERNAL AFFAIRS</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Vice President for External Affairs'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpexternal_id" class = "vpexternal"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Secretary'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "secretary_id" class = "secretary"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
AUDITOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Auditor'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "auditor_id" class = "auditor"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
TREASURER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Treasurer'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info"style = "margin-top:10px;" ><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "treasurer_id" class = "treasurer"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
PRO</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'PRO'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pio_id" class = "pio"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
BUSINESS MANAGER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Business Manager'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "busman_id" class = "busman"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>






	<div class="col-lg-6">
	  <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#242424"><center>
FIRST PEACE OFFICER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'First Peace OFFICER'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
              <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
              <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sgtarm_id" class = "sgtarm"></center>
						</div>

				<?php
					}
				?>
			</div>
        </div>
     </div>





     <div class="col-lg-6">
   	  <div class="panel panel-primary">
         <div class="panel-heading" style="background-color:#242424"><center>
   SECOND PEACE OFFICER</center>
               </div>
               <div class="panel-body" style = "background-color:;">
   				<?php
   					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Second Peace Officer'") or die(mysqli_errno());
   					while($fetch = $query->fetch_array())
   					{
   				?>
   						<div id = "position">
   							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
                 <button type="button" class="btn btn-info" style = "margin-top:10px;margin-left:5px;"><?php echo $fetch['party'].", ".$fetch['platform']?></button>
                 <button type="button" class="btn btn-info" style = "margin-top:10px;"><?php echo $fetch['firstname']." ".$fetch['lastname'].", ".$fetch['year_level']?></button>
   							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sgtarm_idd" class = "sgtarmm"></center>
   						</div>

   				<?php
   					}
   				?>
   			</div>
           </div>
        </div>










		<center><button class = "btn btn-info ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
<?php include ('script.php')?>

  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});

			$(".vpinternal").on("change", function(){
				if($(".vpinternal:checked").length == 1)
					{
						$(".vpinternal").attr("disabled", "disabled");
						$(".vpinternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpinternal").removeAttr("disabled");
					}
			});

			$(".vpexternal").on("change", function(){
				if($(".vpexternal:checked").length == 1)
					{
						$(".vpexternal").attr("disabled", "disabled");
						$(".vpexternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpexternal").removeAttr("disabled");
					}
			});

			$(".secretary").on("change", function(){
				if($(".secretary:checked").length == 1)
					{
						$(".secretary").attr("disabled", "disabled");
						$(".secretary:checked").removeAttr("disabled");
					}
				else
					{
						$(".secretary").removeAttr("disabled");
					}
			});

			$(".auditor").on("change", function(){
				if($(".auditor:checked").length == 1)
					{
						$(".auditor").attr("disabled", "disabled");
						$(".auditor:checked").removeAttr("disabled");
					}
				else
					{
						$(".auditor").removeAttr("disabled");
					}
			});

			$(".treasurer").on("change", function(){
				if($(".treasurer:checked").length == 1)
					{
						$(".treasurer").attr("disabled", "disabled");
						$(".treasurer:checked").removeAttr("disabled");
					}
				else
					{
						$(".treasurer").removeAttr("disabled");
					}

			});
			$(".pio").on("change", function(){
				if($(".pio:checked").length == 1)
					{
						$(".pio").attr("disabled", "disabled");
						$(".pio:checked").removeAttr("disabled");
					}
				else
					{
						$(".pio").removeAttr("disabled");
					}
			});
			$(".busman").on("change", function(){
				if($(".busman:checked").length == 1)
				{
					$(".busman").attr("disabled", "disabled");
					$(".busman:checked").removeAttr("disabled");
				}
			else
				{
					$(".busman").removeAttr("disabled");
				}
			});
			$(".sgtarm").on("change", function(){
				if($(".sgtarm:checked").length == 1)
				{
					$(".sgtarm").attr("disabled", "disabled");
					$(".sgtarm:checked").removeAttr("disabled");
				}
			else
				{
					$(".sgtarm").removeAttr("disabled");
				}
			});

      $(".sgtarmm").on("change", function(){
        if($(".sgtarmm:checked").length == 1)
        {
          $(".sgtarmm").attr("disabled", "disabled");
          $(".sgtarmm:checked").removeAttr("disabled");
        }
      else
        {
          $(".sgtarmm").removeAttr("disabled");
        }
      });






		});
	</script>
</html>
