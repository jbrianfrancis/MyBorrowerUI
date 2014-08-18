<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Successful Enrollment</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
	
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
	<div class="alert alert-success ac-alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> Success! You've signed in to AccountChek  
	</div>
	<div class="container">
		<div class="row">	
		<div class="col-md-12">
		

		<h3><i class="fa fa-university"></i> Your Banks</h3>
		<p class="process-type">Please get started by choosing which one of your banks to enroll first.</p>
			
			<div class="panel panel-default panel-ac">
		  		
			  <!-- Table -->
			  <table class="table table-ac">
				<thead>
				<tr>
					<th>Bank Name</th>
					<th colspan="2"></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="bank-cell">
						Standard Chartered<br>
						<small><strong>No</strong> accounts shared</small>
					</td>
					<td class="enrolled-cell">
						<!-- <p class="status-icon"><i class="fa fa-check-circle fa-2x"></i></p> -->
					 </td>
					 <td>
						<p class="status-action"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i> Enroll Now</a></p>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:middle;">
						Chase Bank<br>
						<small><strong>No</strong> accounts shared</small>
					</td>
					<td class="enrolled-cell">
						<!-- <p class="status-icon"><i class="fa fa-check-circle fa-2x"></i></p> -->
					 </td>
					 <td>
						<p class="status-action"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i> Enroll Now</a></p>
					</td>
				</tr>
				</tbody>
			  </table>			
		
			  <div class="panel-footer panel-footer-ac">
				<a href="#" class="btn btn-default btn-add-new-bank-bot"><i class="fa fa-plus"></i> Add New</a>
		  		</div>
			  </div> <!--  close panel -->
		
	</div> <!-- close row -->
</div> <!-- close col-md-12 -->
</div> <!-- close container -->

    <?php include("includes/footer.php"); ?>
	
  </body>
</html>