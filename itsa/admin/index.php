<?php include ('head.php');?>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                  <div class="panel-heading"style="background-color: #242424;color:#ffffff">


                      <img src="../images/Logo_ITSA.jpg"  alt="ITSA" width="100px" height="100px" style="display: block;margin-left: auto;margin-right: auto;border-radius:100%;">


                      <center><h3 class="panel-title" style="padding-top:20px;">ADMIN LOGIN</h3></center>
                  </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >USERNAME</label>
										<input class="form-control" placeholder="Please input your username" name="username" type="text" autofocus>
                                </div>

                                <div class="form-group">
									<label for = "username" >PASSWORD</label>
										<input class="form-control" placeholder="Please input your password" name="password" type="password" value="">
                                </div>


                                <button class="btn btn-lg btn-info btn-block " name = "login">Login</a>


                            </fieldset>

									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>

			 </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
