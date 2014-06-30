<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - There was a problem</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	<link href="ac.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<?php include("includes/header-banks.php"); ?>
	<div class="alert alert-success ac-alert-error">
		<i class="fa fa-exclamation-circle"></i> There was a problem authenticating. Please look below and take a moment to verify that the bank we're attempting to connect to is yours.
	</div>

	<div class="container">
		<div class="row">
			
				<div class="col-md-10 col-md-offset-1 bank-error">

						<h4 class="bank-name-error"><i class="fa fa-university"></i> Bank of America <span><a href="http://bankofamerica.com" target="_main">Visit site <i class="fa fa-external-link"></i></a></span></h4>
									
					<div class="row">
						<div class="col-md-6"><p><strong>If you're sure</strong> this is your bank and believe you have just made a typo while entering your connection details you can try again one more time.</p>
						
						<a href="multiple-fi-sign-in-error.php" type="submit" class="btn btn-primary btn-hybrid" style="margin-bottom:20px;">Try Again  &nbsp;<i class="fa fa-caret-right"></i></a>
						
						</div>
						<div class="col-md-6"><p><strong>If you're unsure</strong> the correct bank has been selected we recommend you continue by enrolling accounts from another bank.</p>
						
						<a href="#" type="submit" class="btn btn-primary btn-hybrid">New Bank  &nbsp;<i class="fa fa-caret-right"></i></a>
						
						</div>
					</div>
				</div>
			</div>
		</div>

    <?php include("includes/footer.php"); ?>
    <script>
    $(document).ready(function() {
    	$(".info-block").slideDown("slow");
    })
    </script>
	
  </body>
</html>
