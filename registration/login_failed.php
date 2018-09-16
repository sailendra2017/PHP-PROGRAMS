<?php
session_start();
require_once("classes/SQLHelper.class.php");
$obj = new SQLHelper();
$obj->connect();
$org = $_SESSION['org_code'];
//echo "Organisation Code is".$org;
//$org = 'CTTCBBS';

$usercode = isset($_GET['user_code'])?$_GET['user_code']:'';
$username = isset($_GET['user_name'])?$_GET['user_name']:'';
$alllabels = ''; 

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ES Examination</title>
	<link rel="icon" type="image/png" sizes="36x36" href="images/android-icon-36x36.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page-register.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
	<link href="css/bootstrapValidator.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/toastr/toastr.min.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
	a {
    	color: #4c9ed9;
	    text-decoration: none;
	}
	.panel-info {
	    border-color: #bce8f1;
	    outline: solid 10px rgba(216,243,240,0.4);;
	}
	.panel-warning {
	    border-color: #bce8f1;
	    outline: solid 10px rgba(216,243,240,0.4);;
	}
	.error
	{
		position: relative;
		color: red;
		
	}
</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" style="color:#fff;font-size:30px" href="./">ES Examination <span style="font-size:16px">...an assessment platform</span></a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
        <div class="container">
        
        	<div class="row" style="padding: 0px 74px; margin-bottom: 123px;" id="divRegisterFrm2">
            	
				
				
				<!--NEW REGISTER-->
            	<div id="registerBox" style="margin-top:175px;" class="mainbox col-md-9 col-md-offset-2 col-md-9 col-md-offset-2">                    
		           	<div class="alert alert-info" style="margin-top: 10px;">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					     Your status is not <strong>APPROVED</strong> yet. Please contact Your System Administration.<br />
					    <a href="index.php">Click Here</a>   to go back to your login page.
					</div>
		           
		           
		        </div>	
            	<!--NEW REGISTER-->
			</div>
           
        </div><!-- /.container -->
    </div> <!-- /.intro-header -->
   
	
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">Copyright &copy; Edusols 2015-16. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrapValidator.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/apply-login.js"></script>
	<script type="text/javascript" src="assets/js/toastr/toastr.min.js"></script>
	<script type="text/javascript">
		/*$('#myModal').modal('show');*/
	</script>

</body>
</html>
