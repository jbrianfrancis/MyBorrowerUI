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
    <link href="ac.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
	
	<!-- TOGGLE SWITCH STYLES -->
	<link href="css/toggle-switch.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<?php include("includes/header-nobank.php"); ?>

	<div class="alert alert-success ac-alert-success">
		Success! We were able to connect to your bank and get a list of your accounts. 
	</div>

	<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			
			<h3><i class="fa fa-random"></i> Share Accounts</h3>
		<p class="process-type">We noticed that you have additional accounts available to share from your bank. If you prefer you can share these accounts now.</p>

		</div>
	</div>
	<div class="row">
	<div class="col-md-6">
			
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
	</div> <!-- /close col-md-6 -->
		<div class="col-md-6">
			
			<!-- Default panel contents -->


		<div class="panel panel-default panel-ac">
			
		  <!-- Default panel contents -->
		  <div class="panel-heading">
			  <h3 class="panel-title black"><strong>Shared Accounts</strong></h3>
		  </div>

		  <!-- Table -->
		  	<table class="table table-ac">
				<thead class="gray-heading">
				<tr>
					<th>Name</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="account-cell">Operating (************4509)</td>
					<td><em>Shared</em></td>
				</tr>
				<tr>
					<td class="account-cell">SAVINGS (************3276)</td>
					<td class="share-cell"><em>Shared</em></td>
				</tr>

				</tbody>
			  </table>
			  
		  </div> <!-- close panel -->

		</div>
		
	</div>
	</div>

<div class="process-bar">
	<a href="loading.php" class="btn-process">Continue <i class="fa fa-chevron-right"></i></a>
</div>
    <?php include("includes/footer.php"); ?>
	<script>
		$(document).ready(function() {
			$('.ac-alert-success').fadeIn().delay(4000).slideUp();
		})
	</script>
  </body>
</html>
