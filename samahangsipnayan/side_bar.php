<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:#242424;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:white;">VOTING SYSTEM</a>

            </div>


            <ul class="nav navbar-top-links navbar-right">

				<?php
					require 'admin/dbcon.php';
					$query = $conn->query("SELECT * from voters where voters_id ='$_SESSION[id]'")or die (mysqli_errno ());
					$row = $query->fetch_array();
				?>

            </ul>
