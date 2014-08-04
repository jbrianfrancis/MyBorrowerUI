<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Bank Details</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
	
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
			<div class="col-md-12">
				<div class="back-btn-container">
					<a class="btn btn-default btn-sm" href="#"><i class="fa fa-arrow-left"></i> Back to Your Banks</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<h3><i class="fa fa-university"></i> Bank of America</h3>
			<p class="process-type"><i class="fa fa-check-circle icon-text-success"></i> <strong>3 of 5</strong> accounts have been shared. <a href="#">Share more <i class="fa fa-arrow-right"></i></a></p>
							
			<div class="panel panel-default panel-ac">
			  <!-- Default panel contents -->
			  <!-- <div class="panel-heading">
				  <h3 class="panel-title black"><strong>Shared Accounts</strong></h3>
			  </div> -->

			  <!-- Table -->
			  	<table class="table table-ac bank-table">
					<thead>
					<tr>
						<th>Shared Account</th>
						<th>Balance</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td class="account-cell">Operating (************4509)</td>
						<td class="share-cell">$3101.74</td>
					</tr>
					</tbody>
				</table>

				<table class="table transaction-summary">
				<tbody>
				<tr>
					<td>10/31/2013</td>
					<td>ZAXBY'S ATL HWY 231233</td>
					<td>$5.74</td>
				</tr>
				<tr>
					<td>10/31/2013</td>
					<td>GA POWER</td>
					<td>$71.14</td>
				</tr>
				<tr>
					<td>10/31/2013</td>
					<td>CHARTER COMM</td>
					<td>$96.17</td>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">
							<a href="account-detail.php">View More Transactions</a>
						</td>
					</tr>
				</tfoot>
				</table>
				<table class="table table-ac bank-table">
					<thead>
					<tr>
						<th></th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td class="account-cell">SAVINGS (************3276)</td>
						<td class="share-cell">$8971.14</td>
					</tr>
					</tbody>
				</table>

				<table class="table transaction-summary">
				<tbody>
				<tr>
					<td>10/31/2013</td>
					<td>ZAXBY'S ATL HWY 231233</td>
					<td>$5.74</td>
				</tr>
				<tr>
					<td>10/31/2013</td>
					<td>GA POWER</td>
					<td>$71.14</td>
				</tr>
				<tr>
					<td>10/31/2013</td>
					<td>CHARTER COMM</td>
					<td>$96.17</td>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">
							<a href="#">View More Transactions</a>
						</td>
					</tr>
				</tfoot>
				</table>
				<table class="table table-ac bank-table">
					<thead>
					<tr>
						<th></th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td class="account-cell">UNNAMED (************4234)</td>
						<td class="share-cell">$44,904.24</td>
					</tr>
					</tbody>
				</table>

				<table class="table transaction-summary">
				<tbody>
				<tr>
					<td>10/31/2013</td>
					<td>ZAXBY'S ATL HWY 231233</td>
					<td>$5.74</td>
				</tr>
				<tr>
					<td>10/31/2013</td>
					<td>GA POWER</td>
					<td>$71.14</td>
				</tr>
				<tr>
					<td>10/31/2013</td>
					<td>CHARTER COMM</td>
					<td>$96.17</td>
				</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">
							<a href="#">View More Transactions</a>
						</td>
					</tr>
				</tfoot>
				</table>
				</div><!-- close panel -->
		
		
	</div> <!-- close row -->
	</div><!-- close col-md-12 -->
</div><!-- close container -->
	
    <?php include("includes/footer.php"); ?>
	
  </body>
</html>
