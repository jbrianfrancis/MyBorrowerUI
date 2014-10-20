<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AccountChek™">
    <meta name="author" content="FORMFREE Holdings">
    <link rel="shortcut icon" href="">

    <title>Resend Personal Access Code - AccountChek™</title>
	
	<!-- Bootstrap 3 -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	
	<!-- TOGGLE SWITCH STYLES -->
	<link href="css/toggle-switch.css" rel="stylesheet">

	<!-- AccountChek™ STYLES -->
    <link href="ac.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="signedout-signin">

<div class="container">
   	<form role="form" class="form-signin">
	<div class="row white-header">
    <img src="images/logo-check.svg" width="106" alt="AccountChek™: Simple.Smart.Secure." onerror="this.onerror=null; this.src='images/logo-check.png'">
	</div>
  <div class="panel panel-default panel-signin">
      <div class="panel-body panel-body-signin">

                <p class="resend">Just enter your email address below and we'll send you a new Personal Access Code!</p>
                <input class="form-control" data-val="true" data-val-required="The User name field is required." id="UserName" name="UserName" placeholder="Email Address" type="text" value="" />
            
                <!-- Resend Button -->

                <a href="#" onclick="javascript: document.Login.submit();"  class="btn btn-hybrid btn-lg btn-block">Resend Code</a>

            </div>
        </div>
        </form>
      </div>

    <?php include("includes/footer.php"); ?>
  </body>
  </html>
