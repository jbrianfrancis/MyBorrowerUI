<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Add New Bank</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
	
    <!-- Custom styles for this template -->
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  
<?php include("includes/header-banks.php"); ?>

<div class="container">
<div class="row">
	<div class="col-md-12">
		
<!-- Add New FI header -->

	<h3><i class="fa fa-building-o"></i> Add New Bank</h3>	

	<p class="process-type">Choose a bank from the top 10 list, or find your bank using either the <strong>name of the bank</strong> or by <strong>routing number</strong>.</p>
	
		</div>
	</div>
</div>

<div class="container">
<div class="row">
	
	<div class="col-md-6">
		<h4 class="tiny-caps-type">Top 10 Banks</h4>
			<!-- List common banks -->
			<ul class="top-10-banks">
				<li><a href="single-fi-sign-in-nolanding.php">Bank of America</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">Capital One 360 (formerly ING Direct)</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">Chase Bank</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">Citibank Online</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">Fifth Third Bank</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">HSBC Personal Internet Banking (US)</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">PNC Bank, N.A.</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">Suntrust - Personal Banking</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">USAA</a></li>
				<li><a href="single-fi-sign-in-nolanding.php">Wells Fargo Online</a></li>
			</ul>
			
	</div>
	<div class="col-md-6">
			<h4 class="tiny-caps-type">Find Your Bank</h4>
				
				<div class="input-group">
					<!-- Field for bank name -->
			      <input type="text" class="form-control" placeholder="By Name">
			      <span class="input-group-btn">
			        <a class="btn btn-primary btn-acaddon" href="add-new-bank-results.php">Go!</a>
			      </span>
			    </div><!-- /input-group -->
			
				<p>&nbsp;</p>
				<div class="input-group">
					<!-- Field for routing number -->
			      <input type="text" class="form-control" placeholder="By Routing Number">
			      <span class="input-group-btn">
			        <a class="btn btn-primary" href="single-fi-sign-in-nolanding.php">Go!</a>
			      </span>
			    </div><!-- /input-group -->
				
				<hr>
				
				<h5>How to find your routing number</h5>
				
				<p><img src="images/new-check.png" class="check-image" alt="How to find your routing number"></p>
				
	</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
