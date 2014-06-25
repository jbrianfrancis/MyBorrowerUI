<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Your Banks</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
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
			
		
		<h3><i class="fa fa-building-o"></i> Your Banks</h3>
		<p class="process-type">The following banks have been added to ACCOUNTCHEK.</p>
		
		<div class="panel panel-default panel-ac">
		  		
		  <!-- Table -->
		  <table class="table table-ac">
			<thead>
			<tr>
				<th colspan="3">Bank Name</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td style="vertical-align:middle;" class="bank-cell">
						Simple - Visa Debit Card<br>
						<small><strong>No</strong> accounts shared</small>
				</td>
				<td class="enrolled-cell"><p class="status-icon"><i class="fa fa-check-circle fa-2x"></i></p></td>
				<td style="vertical-align:middle;">
						<p class="status-action"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i> Enroll Now</a></p>
				</td>
			</tr>
			<tr>
				<td style="vertical-align:middle;">
					<a href="nav-bank-details.php">American Bank</a><br>
					<small><strong>2 of 6</strong> accounts shared</small>
				</td>
				<td class="enrolled-cell">
					<p class="status-icon"><i class="fa fa-check-circle fa-2x"></i></p>
				</td>
				<td>
					<p class="status-action"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Share More</a></p>
				</td>
			</tr>
			<!-- <tr>
				<td style="vertical-align:middle;">
					American Bank of Texas (Seguin, Highland Lakes...<br>
					<small><strong>No</strong> accounts shared</small>
				</td>
				<td class="enrolled-cell warning-icon" style="vertical-align:middle;">
					<p class="status-icon acerror"><i class="fa fa-exclamation-circle fa-2x"></i></p>
				</td>
				<td>
					<p class="status-action"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-repeat"></i> Try Again</a></p>
				</td>
			</tr>
			
			<tr>
				<td style="vertical-align:middle;">
					<a href="nav-bank-details.php">American Bank of Texas (Seguin, Highland Lakes...</a><br>
					<small><strong>4 of 6</strong> accounts shared</small>
				</td>
				<td class="enrolled-cell warning-icon">
					<p class="status-icon acwarning"><i class="fa fa-exclamation-triangle fa-2x"></i></p>
				</td>
				<td>
					<p class="status-action"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-wrench"></i> Fix It</a></p>
				</td>
			</tr>-->
			</tbody>
		  </table>			
		
		  <div class="panel-footer panel-footer-ac">
			  <a class="btn btn-lg btn-hybrid" href="#"><i class="fa fa-plus"></i> Add New Bank</a>
		  </div> <!-- close panel-footer -->
		
	</div> <!-- close panel -->
		
	</div> <!-- close row -->
	</div> <!-- close col-md-12 -->
	</div> <!-- close container -->
	
    <?php include("includes/footer.php"); ?>
  </body>
</html>
