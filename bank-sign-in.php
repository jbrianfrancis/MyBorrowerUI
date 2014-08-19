<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK - Authorize your Financial Institution</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<?php include("includes/header-nobank.php"); ?>
	
<div class="alert alert-success ac-alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> <i class="fa fa-check-circle"></i> Success! You have signed in to ACCOUNTCHEK. Now, we need to connect to your Bank. 
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
								<h5 class="fi-name">DagBank</h5>
								<form action="/HomeY/InitialBankCredentials?Length=5" data-ajax="true" data-ajax-loading="#loading" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#partialView" id="form0" method="post" name="loginForms" novalidate="novalidate"><input data-val="true" data-val-number="The field siteId must be a number." data-val-required="The siteId field is required." id="fiInfo_siteId" name="fiInfo.siteId" type="hidden" value="8995"><input id="fiName" name="fiName" type="hidden" value="DagBank">									<input type="hidden" name="credentialError" value="False">
											<div class="form-group ">
												<label for="ID-LOGIN">Username</label>
												<input class="form-control" id="ID-LOGIN" name="ID-LOGIN" type="text" value="">
											</div>
											<div class="form-group ">
												<label for="ID-PASSWORD1">Password</label>
												<input class="form-control" id="ID-PASSWORD1" name="ID-PASSWORD1" type="password" value="">
											</div>
									<!-- Sign-in Button -->
									<a href="#" onclick="doSubmit('form0', 'inputForm');" class="btn btn-lg btn-authorize">Authorize  &nbsp;<i class="fa fa-caret-right"></i></a>
									<p class="xpadding10">Not your bank? Try a <a href="/HomeY/SearchFI">new search</a></p>
									</form>							
						</div>

												
					</div> <!-- close row -->
					
					
				 
			    </div> <!-- close panel-body -->
				
				
				
			  </div> <!-- close panel -->
			  
			
			  
		  </div> <!-- close col-md-10 -->
			
		</div> <!-- close row -->
		
	</div><!-- close container -->
	

	<?php include("includes/footer.php"); ?>
	
  </body>
</html>
