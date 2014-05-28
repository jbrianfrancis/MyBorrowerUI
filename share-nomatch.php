<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Share Accounts</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
	
	<!-- TOGGLE SWITCH STYLES -->
	<link href="css/toggle-switch.css" rel="stylesheet">
	<link href="ac.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<?php include("includes/header-nobank.php"); ?>

	<div class="alert alert-success ac-alert-warning">
		<i class="fa fa-exclamation-triangle"></i> We were unable to find the account you listed. It was likely just a glitch or a typo. Please choose which account you'd like to share from the list below.
	</div>

	<div class="container">
	<!--<div class="row">
		
		<div class="col-md-12">
			
			<h3><i class="fa fa-random"></i> Share Accounts</h3>
		<p class="process-type">We noticed that you have additional accounts available to share from your bank. If you prefer you can share these accounts now.</p>

		</div>
	</div> -->
	<div class="row">
	<div class="col-md-12">
			
		<div class="panel panel-default panel-ac">
  		  	<!-- Default panel contents -->
  			    <div class="panel-heading">
  			  		<h3 class="panel-title black"><strong>Accounts Available to Share</strong></h3>
  		  		</div> <!-- close panel-heading -->

  		  <!-- Table -->
  		  	<table class="table table-ac">
  				<thead class="gray-heading">
  				<tr>
  					<th class="account-cell">Name</th>
					<th class="share-cell">Share?</th>
  				</tr>
  				</thead>
  				<tbody>
  				<tr>
					<td class="account-cell">
						Money Market (************1673)
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
  				<tr>
					<td class="account-cell">
						UNNAMED (************4234)
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

		</div>
		<div class="panel-footer panel-footer-ac">
			  <a class="btn btn-lg btn-hybrid" href="#">Continue <i class="fa fa-chevron-right"></i></a>
		  	</div> <!-- close panel-footer -->
	</div> <!-- /close col-md-12 -->
		
		
	</div>
</div>

    <?php include("includes/footer.php"); ?>
	<script>
		$(document).ready(function() {
			$('.ac-alert-warning').fadeIn();
		})
	</script>
  </body>
</html>
