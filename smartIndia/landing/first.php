<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>University Time Table</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
	

    <!-- Start your project here-->
    <div style="height: 100vh">
        <div class="flex-center flex-column animated fadeIn">
            <h1 class="mb-1">University Time Table</h1>

            <div  class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-login" >Student Log In</div>
			<div>  <a href="../memberPortal/admin.php" class="btn btn-primary mb-2">Admin Log In</a></div>

            <h5 class="mb-1">Thank you for using our product. We're glad you're with us.</h5>

            <p class="text-muted">deepMind</p>

            
        </div>
    </div>
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="w-100"><i class="fa fa-user"></i> Login</h3>
            </div>
            <!--Body-->
			
            <div class="modal-body">
			<form method="POST" action="index.php">
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" name="email" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" name="password" id="form3" class="form-control">
                    <label for="form3">Your password</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-lg">Login</button>
                </div>
			</form>	
            </div>
			
            <!--Footer-->
            <div class="modal-footer">
                <div class="options text-right">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
                <button type="button" class="btn btn-default ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>




<!-- /.Live preview-->
    <!-- /Start your project here-->
	

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
