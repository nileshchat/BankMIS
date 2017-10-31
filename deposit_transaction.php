<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Deposit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="row top-margin">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">DEPOSIT FORM</div>
                        <div class="panel-body">
                            <form method="post" action="transaction_update_deposit.php">
                            <div class="form-group">
								<label for="accountnumber">Account Number : </label>
								<input type="text" class="form-control" name="accountnumber">	
							</div>
                            <div class="form-group">
								<label for="name">Name : </label>
								<input type="text" class="form-control" name="name">	
							</div>
                            <div class="form-group">
								<label for="depositedamount">Amount To Deposit : </label>
								<input type="text" class="form-control" name="depositedamount">	
							</div>
                                <center>
                                <button type="submit "class="btn btn-primary" name="submit">SUBMIT</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
