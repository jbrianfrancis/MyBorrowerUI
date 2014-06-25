<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Bank Details</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	
	<!-- TOGGLE SWITCH STYLES -->
	<link href="css/toggle-switch.css" rel="stylesheet">
	
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
			<div class="col-md-12 back-btn">
			<a class="btn btn-default btn-sm" href="#"><i class="fa fa-arrow-left"></i> Back to Your Banks</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<h3><i class="fa fa-university"></i> American Bank of Texas (Seguin, Highland Lakes, Austin, San Antonio, Fredericksburg, Temple)</h3>
							
			<div class="panel panel-default panel-ac">
			  <!-- Default panel contents -->
			  <div class="panel-heading">
				  <h3 class="panel-title black"><strong>Shared Accounts</strong></h3>
			  </div>

			  <!-- Table -->
			  	<table class="table table-ac">
					<thead>
					<tr>
						<th>Name</th>
						<th>Balance</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td class="account-cell"><a href="nav-account-details.php">Operating (************4509)</a></td>
						<td class="share-cell">$3101.74</td>
					</tr>
					<tr>
						<td><a href="nav-account-details.php">SAVINGS (************3276)</a></td>
						<td>$8971.14</td>
					</tr>
					<tr>
						<td><a href="nav-account-details.php">Money Market (************1673)</a></td>
						<td>$12,101.74</td>
					</tr>
					<tr>
						<td><a href="nav-account-details.php">UNNAMED (************4234)</a></td>
						<td>$44,904.14</td>
					</tr>
					</tbody>
				  </table>
			  </div>
		  
			  <p>&nbsp;</p>
		  
	  		<div class="panel panel-default panel-ac">
	  		  <!-- Default panel contents -->
	  		  <div class="panel-heading">
	  			  <h3 class="panel-title black"><strong>Accounts Available to Share</strong></h3>
	  		  </div>

	  		  <!-- Table -->
	  		  	<table class="table table-ac">
	  				<thead>
	  				<tr>
	  					<th class="account-cell">Name</th>
						<th class="share-cell">Share?</th>
	  				</tr>
	  				</thead>
	  				<tbody>
	  				
	  				<tr>
						<td class="account-cell">
							IRA84 (************2233)
						</td>
						<td class="share-cell">
							<label class="switch-light switch-candy" onclick="">
								<input type="checkbox">
									<span>
									<span>No</span>
									<span>Yes</span>
									</span>

									<a></a>
							</label>
						</td>
					</tr>
	  				<tr>
						<td class="account-cell">
							 SEP088 (************6571)
						</td>
						<td class="share-cell">
							<label class="switch-light switch-candy" onclick="">
								<input type="checkbox">
									<span>
									<span>No</span>
									<span>Yes</span>
									</span>

									<a></a>
							</label>
						</td>
	  				</tr>
	  				</tbody>
	  			  </table>
				  
				  <div class="panel-footer panel-footer-ac"><a class="btn btn-lg btn-hybrid" href="#">Share Accounts <i class="fa fa-caret-right"></i></a>
	  		  		</div> <!-- close panel-footer -->
				
					</div><!-- close panel -->
		
		
	</div> <!-- close row -->
	</div><!-- close col-md-12 -->
</div><!-- close container -->
	
    <?php include("includes/footer.php"); ?>
	
  </body>
</html>
