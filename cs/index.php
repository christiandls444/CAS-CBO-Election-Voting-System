<?php include ('head.php');?>
<body>
    <div class="container">
        <div class="row">


            <div class="col-md-4 col-md-offset-4" >

                <div class="login-panel panel panel-default">



                    <div class="panel-heading"style="background-color: #242424;color:#ffffff">


                      <img src="images/Logo_COMSA.jpg"  alt="COMSA" width="100px" height="100px" style="display: block;margin-left: auto;margin-right: auto;border-radius:100%;">

                        <center><h3 class="panel-title" style="padding-top:20px;">STUDENT LOGIN</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >STUDENT NO.</label>
										<input class="form-control" placeholder="Please input your student no." name="idno" type="text" required = "required" autofocus>
                                </div>

                                <div class="form-group">
									<label for = "username" >PASSWORD</label>
										<input class="form-control" placeholder="Please input your password" name="password" type="password" required = "required">
                                </div>


                                <button class="btn btn-lg btn-info btn-block " name = "login">Login</a></button><br>



                            </fieldset>

									<?php include ('login_query.php');?>
                </form><center>

                          <a href="register/index.php"style="decoration:none;"><button class="btn btn-lg btn-info btn-block">Register</button></a>

                        </center><br>
                        <font color ="#b2b2b2"><b>Note:</b> Student no. must number no dash (-) </font><br>
                        <font color ="#b2b2b2"><b>Note:</b> One voter can only vote/login one time! </font><br>

                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
