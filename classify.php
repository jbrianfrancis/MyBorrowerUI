<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Classify Your Accounts</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<?php include("includes/header-nobank.php"); ?>
	
	<div class="alert alert-success ac-alert-success">
		Success! We were able to connect to your shared accounts. One more step! 
	</div>
	
	<div class="container process-container">
	<div class="row">
		<div class="col-md-12">
		
			
		<h3><i class="fa fa-folder-open"></i> Classify Shared Accounts</h3>


		<div class="panel panel-default panel-ac">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
			  <h3 class="panel-title black"><strong>American Bank of Texas (Seguin, Highland Lakes, Austin, San Antonio, Fredericksburg, Temple)</strong></h3>
		  </div> <!-- close panel-heading -->


		  <!-- Table -->
		  <table class="table table-ac table-hover">
			<thead class="gray-heading">
			<tr>
				<th style="padding-left:10px;">Account</th>
				<th>Type</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Operating (************4509)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Checking</option>
				  <option>Savings</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			<tr>
				<td>SAVINGS (************3276)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Savings</option>
				  <option>Checking</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			<tr>
				<td>SAVINGS (************3276)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Savings</option>
				  <option>Checking</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			<tr>
				<td>SAVINGS (************3276)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Savings</option>
				  <option>Checking</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			<tr>
				<td>SAVINGS (************3276)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Savings</option>
				  <option>Checking</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			<tr>
				<td>SAVINGS (************3276)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Savings</option>
				  <option>Checking</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			<tr>
				<td>SAVINGS (************3276)</td>
				<td>
				<select class="form-control input-sm">
				  <option>Savings</option>
				  <option>Checking</option>
				  <option>Investment</option>
				  <option>Credit Card</option>
				  <option>Other Assets</option>
				  <option>Other Liabilities</option>
				</select></td>
			</tr>
			
			</tbody>
		  </table>


		</div> <!-- close panel -->
		
			<div class="panel-footer panel-footer-ac">
			  <a class="btn btn-lg btn-hybrid" href="#">Continue <i class="fa fa-chevron-right"></i></a>
		  	</div> <!-- close panel-footer -->
		
	</div> <!-- close row -->
	</div> <!-- close col-md-12 -->
</div> <!-- close container -->


    <?php include("includes/footer.php"); ?>
	
	<script>
		$(document).ready(function() {
			$('.ac-alert-success').fadeIn().delay(2000).slideUp();
		})
	</script>
  </body>
</html>
