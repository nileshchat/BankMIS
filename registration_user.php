<html>
    <head>
        <title>User Registration</title>
        <meta name="viewport" content="width=width-device, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <style type="text/css">
            .top_margin{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row top-margin">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Registration Form</h3></div>
                        <div class="panel-body">
                        <form method="post" action="registration_user_script.php">
                            <div class="form-group">
								<label for="name">Name : </label>
								<input type="text" class="form-control" name="name" placeholder="Name">	
							</div>
                            <div class="form-group">
								<label for="accountnumber">Account Number : </label>
								<input type="text" class="form-control" name="accountnumber" placeholder="Account Number">	
							</div>
                            <div class="form-group">
								<label for="DOB">Date Of Birth : </label>
								<input type="text" class="form-control"  name="DOB" placeholder="Date Of Birth (dd/mm/yyyy)">	
							</div>
                            <div class="form-group">
								<label for="email">Email : </label>
								<input type="text" class="form-control"  name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
								<label for="contact">Contact : </label>
								<input type="text" class="form-control" name="contact" placeholder="Contact">	
							</div>
                            <div class="form-group">
								<label for="address">Address : </label>
								<input type="text" class="form-control"  name="address" placeholder="Address">	
							</div>
                            <div class="form-group">
								<label for="balance">Balance : </label>
								<input type="text" class="form-control"  name="balance" placeholder="Current Balance">	
							</div>
                            <center>
                                <button type="submit" name="submit" class="btn btn-primary" >SUBMIT</button>
                            </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </body>
</html>