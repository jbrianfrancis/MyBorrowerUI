<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Authorize your Financial Institution</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	
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
	
<div class="alert alert-success ac-alert-success">
		Success! You have signed in to ACCOUNTCHEK. Now, we need to connect to your Bank. 
	</div>

	<div class="container">
		
		<div class="row">
		  <div class="col-sm-12">
		
			  <div class="panel panel-default">
				  
			    <div class="panel-heading panel-heading-authorize">
			      
			    </div> <!-- close panel-heading -->
				
			    <div class="panel-body panel-body-ac">
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h3 class="panel-title panel-title-authorize"><i class="fa fa-university"></i> Your Bank Sign in</h3>
							<p class="tiny-caps">Bank Name</p>
						     <h5 class="fi-name">American Bank of Texas (Seguin, Highland Lakes, Austin, San Antonio, Fredericksburg, Temple)</h5>
				 
			   			  <div class="form-group">

			   				<!-- Email Address -->
			   				<label for="exampleInputEmail1" class="tiny-caps">Username</label>
			   			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username" autofocus>
			   			  </div> <!-- close form-group -->
						  
			   			  <div class="form-group">
							  <!-- Password -->
			   			    <label for="exampleInputPassword1" class="tiny-caps">Password</label>
			   			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div> <!-- close form-group -->


			   			<!-- Sign-in Button -->

			   			<a href="#" class="btn btn-lg btn-authorize">Authorize  &nbsp;<i class="fa fa-caret-right"></i></a>

			   			<p class="xpadding10">Not your bank? Try a <a href="#">new search</a></p>

			   			<!-- <p class="xpadding10"><small class="inverse"><span class="glyphicon glyphicon-lock"></span> <strong>Secure &amp; Protected</strong><br /> We will use your login information to access a limited view of your account(s). We will not be able to manage or change anything about your accounts.</small></p> -->
							
						</div> <!-- close col-md-6 col-md-offsert-3 -->
												
					</div> <!-- close row -->
					
					
				 
			    </div> <!-- close panel-body -->
				
				
				
			  </div> <!-- close panel -->
			  
			
			  
		  </div> <!-- close col-md-10 -->
			
		</div> <!-- close row -->
		
	</div><!-- close container -->
	

	<?php include("includes/footer.php"); ?>
	<script>
		$(document).ready(function() {
			$('.ac-alert-success').fadeIn().delay(3000).slideUp();
		})
	</script>
  </body>
</html>
