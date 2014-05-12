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
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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

	<p class="process-type-banks">Choose a bank from the top 10 list, or find your bank using either the <strong>name of the bank</strong> or by <strong>routing number</strong>.</p>
	
		</div>
	</div>
</div>

<div class="container">
<div class="row">
	
	<div class="col-md-6">
		<h4 class="tiny-caps-type">Top 10 Banks</h4>
			<!-- List common banks -->
			<ul class="top-10-banks">
				<li><a href="#">Bank of America</a></li>
				<li><a href="#">Capital One 360 (formerly ING Direct)</a></li>
				<li><a href="#">Chase Bank</a></li>
				<li><a href="#">Citibank Online</a></li>
				<li><a href="#">Fifth Third Bank</a></li>
				<li><a href="#">HSBC Personal Internet Banking (US)</a></li>
				<li><a href="#">PNC Bank, N.A.</a></li>
				<li><a href="#">Suntrust - Personal Banking</a></li>
				<li><a href="#">USAA</a></li>
				<li><a href="#">Wells Fargo Online</a></li>
			</ul>
			
	</div>
	<div class="col-md-6">
			<h4 class="tiny-caps-type find-bank">Find Your Bank</h4>
				
				<!-- Field for bank name -->
			  <input type="text" class="form-control" placeholder="By Name">
			  <a href="#" class="btn btn-lg btn-find-bank">Find Bank <i class="fa fa-chevron-right"></i></a>  
			
				<p>&nbsp;</p>

				<!-- Field for routing number -->
			      <input type="text" class="form-control" placeholder="By Routing Number">
			      <a href="#" class="btn btn-lg btn-find-bank">Find Bank <i class="fa fa-chevron-right"></i></a>
				
	</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			
			<h4 class="tiny-caps-type">How to find your routing number</h4>
				
			<p><img src="images/check-big.gif" class="check-image" alt="How to find your routing number"></p>

		</div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
