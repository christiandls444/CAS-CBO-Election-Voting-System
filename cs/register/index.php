
<?php include ('head.php');?>
<body>
<?php
	function passFunc($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0];
				}
			return $gen;
		}

?>
    <div id="wrapper">

       <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><b>REGISTRATION</b></h2>
                </div>
				<div class = "well col-lg-5">
					<div class="panel panel-green">
                        <div class="panel-heading" style="background-color:#242424">
                            PLEASE ENTER THE DETAILS NEEDED BELOW
                        </div>
                        <div class="panel-body">

                         <form method = "post" enctype = "multipart/form-data">
											<div class="form-group">
												<label>STUDENT NO.</label>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "Please input your student no." required="true">

											</div>

											<!--<div class="form-group">
											<(edit)?php
													$change =  passFunc(8, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
											?>
												<label>PASSWORD</label>
													<input class="form-control"  type = "text" name = "password" id = "pass" required="true" readonly="readonly" placeholder="Please generate your password"/>
													<input type = "button" value = "Generate" onclick = "document.getElementById('pass').value = '<?php echo $change?>'">
											</div>-->

											<div class="form-group">
												<label>PASSWORD</label>
													<input class="form-control" type ="text" name = "password" placeholder="Please input your password" required="true">
											</div>

											<div class="form-group">
												<label>FIRSTNAME</label>
													<input class="form-control" type ="text" name = "firstname" placeholder="Please input your firstname" required="true">
											</div>

											<div class="form-group">
												<label>MIDDLENAME</label>
													<input class="form-control" type ="text" name = "middlename" placeholder="Please input your middlename" required="true">
											</div>

											<div class="form-group">
												<label>LASTNAME</label>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Please input your lastname" required="true">
											</div>


											<div class="form-group">
												<label>YEAR LEVEL</label>
													<select class = "form-control" name = "year_level">
														<option>Please select your year level</option>
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>
													</select>
											</div>

											<div class="form-group">
												<label>SECTION</label>
													<select class = "form-control" name = "section">
														<option>Please select your section</option>
														<option>A</option>
														<option>B</option>
														<option>C</option>
														<option>D</option>
														<option>E</option>
													</select>
											</div>

<!--
											<div class="form-group">
												<label>EVIDENCE</label>
						<input type="file" name="uploadfile"required>
                    </div>

-->
											 	 <button name = "save" type="submit" class="btn btn-info">SAVE VOTER</button>

						  				 </div>


										</form>

							<?php
								require 'dbcon.php';

								if (isset($_POST['save'])){
									$id_number=$_POST['id_number'];
									$password = $_POST['password'];
									$firstname=$_POST['firstname'];
									$middlename = $_POST['middlename'];
									$lastname=$_POST['lastname'];
									$year_level=$_POST['year_level'];
									$section = $_POST['section'];

									/*
									$filename = $_FILES["uploadfile"]["name"];
									$tempname = $_FILES["uploadfile"]["tmp_name"];
   								$folder = "evidences/".$filename;
									move_uploaded_file($tempname, $folder);


									$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
									$image_name= addslashes($_FILES['image']['name']);
									$image_size= getimagesize($_FILES['image']['tmp_name']);
									move_uploaded_file($_FILES["image"]["tmp_name"],"candidates/" . $_FILES["image"]["name"]);
									$location="evidences/" . $_FILES["image"]["name"];


									$tempname= addslashes(file_get_contents($_FILES['uploadfile']['tmp_name']));
									$filename= addslashes($_FILES['uploadfile']['name']);
									$image_size= getimagesize($_FILES['uploadfile']['tmp_name']);
									move_uploaded_file($_FILES["tempname"]["tmp_name"],"candidates/" . $_FILES["tempname"]["name"]);
									$location="evidences/" . $_FILES["uploadfile"]["name"];


									$tempname = $_FILES['uploadfile']['tmp_name'];
									$filename = "evidences/".$_FILES['uploadfile']['name'];
									move_uploaded_file($tempname, $filename);
									echo $_FILES['uploadfile']['name'];
									*/


									$query = $conn->query("SELECT * FROM voters WHERE id_number='$id_number'") or die (mysql_error());
									$count = $query->fetch_array();

									if ($count  > 0){
									?>
										<script>
											alert("ID Number Already Exist");
										</script>
									<?php
										}
										else{
										$conn->query("insert into voters(id_number, password, firstname, middlename, lastname, year_level, section ,status ) VALUES('$id_number', '$password','$firstname','$middlename','$lastname','$year_level','$section','Unvoted')");






									?>
									<script>
										alert('Voters Successfully Save');
									</script>
							<?php
									}
								}
							?>


						</div>
						</form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include ('script.php');?>
</body>

</html>
