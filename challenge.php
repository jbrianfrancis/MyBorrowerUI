<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Authorize your Financial Institution</title>

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
	
	<?php include("includes/header-nobank.php"); ?>
	
	<div class="alert alert-success ac-alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> Success! We've made the connection. Your bank now needs you to complete some additional security steps. 
	</div>

	<div class="container">
		

			<div class="row">
			  <div class="col-md-6 col-md-offset-3">
		
				  <div class="panel panel-default">
				    <div class="panel-heading panel-heading-authorize">
				      <h3 class="panel-title panel-title-authorize"><i class="fa fa-university"></i> Your Bank Security</h3>
				    </div> <!-- close panel-heading -->
					
				    <div class="panel-body panel-body-ac">
					
			
	  			<!-- Security Question -->
	  			<div class="form-group">
					<label for="exampleInputEmail1" class="challenge">What is your favorite restaurant?</label>
	  		    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Answer" autofocus>
				</div><!-- close form group -->
	  		
						
	  			</div><!-- close panel-body -->
	  		</div><!-- close panel -->
			
			  <a class="btn btn-lg btn-hybrid" href="#">Continue <i class="fa fa-chevron-right"></i></a>

		</div> <!-- close col-md-6 -->	
	</div> <!-- close row -->	
</div> <!-- close container -->	

    <?php include("includes/footer.php"); ?>
	
  </body>
</html>
