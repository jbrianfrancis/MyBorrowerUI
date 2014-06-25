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
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
		<i class="fa fa-exclamation-triangle"></i> We weren't able to match the account you listed with one from your bank. 
	</div>

	<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
			
		<div class="panel panel-default panel-ac">
  		  	<!-- Default panel contents -->

  			  		<p class="unmatched">The unmatched account number you entered was <strong>100275431674</strong>. Can you match it up with any of the accounts we received from your bank in the list below?</p>

  		  		 <!-- close panel-heading -->

  		  <!-- Table -->
  		  	<table class="table table-ac">
  				<tbody>
  				<tr>
					<td class="account-cell">
						<div class="radio">
  							<label> 
    							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Money Market (************1673)
  							</label>
						</div>
					</td>
  				</tr>
  				<tr>
					<td class="account-cell">
						<div class="radio">
  							<label> 
    							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> SEP088 (************6571)
  							</label>
						</div>
					</td>
  				</tr>
  				<tr>
					<td class="account-cell">
						<div class="radio">
  							<label> 
    							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> UNNAMED (************4234)
  							</label>
						</div>
					</td>
  				</tr>
  				</tbody>
  			  </table>

		</div>
		<div class="panel-footer panel-footer-ac">
		<div class="row">
			<div class="col-md-7">
			  <a class="btn btn-lg btn-hybrid" href="#">Yes, Continue <i class="fa fa-chevron-right"></i></a>
			</div>
			<div class="col-md-5">
			  <a class="btn btn-lg btn-hybrid btn-secondary" href="#">No Match</a>
			</div>
		</div>
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
