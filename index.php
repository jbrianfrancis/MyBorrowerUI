<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK</title>
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
	  
<?php include("includes/header-nolinks.php"); ?>


<!-- Results header -->
<div class="container">
<div class="row">
	<div class="col-md-12">
			
			<h3><i class="fa fa-files-o"></i> Views</h3>
      <p class="process-type"></p>
						
			<div class="list-group">
          <a href="Walkthrough/sign-in.php" class="list-group-item" target="_main">
            <h4 class="list-group-item-heading">Walkthrough <i class="fa fa-external-link"></i></h4>
            <p class="list-group-item-text"></p>
          </a>
  				<a href="sign-in.php" class="list-group-item">
    				<h4 class="list-group-item-heading">Sign-in</h4>
    				<p class="list-group-item-text"></p>
  				</a>
          <a href="sign-in-resend.php" class="list-group-item">
            <h4 class="list-group-item-heading">Sign-in - Resend</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="resend-pac.php" class="list-group-item">
            <h4 class="list-group-item-heading">Resend Personal Access Code</h4>
            <p class="list-group-item-text"></p>
          </a>
  				<a href="bank-sign-in.php" class="list-group-item">
    				<h4 class="list-group-item-heading">Bank Sign-in</h4>
    				<p class="list-group-item-text"></p>
  				</a>
          <a href="bank-sign-in-error-first.php" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Sign-in First Error</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="bank-sign-in-error.php" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Sign-in Error Again</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="bank-sign-in-error-cta.php" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Sign-in Error Bank CTA</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="challenge.php" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Challenge</h4>
            <p class="list-group-item-text"></p>
          </a>
  				<a href="classify.php" class="list-group-item">
    				<h4 class="list-group-item-heading">Classify Accounts</h4>
    				<p class="list-group-item-text"></p>
  				</a>
  				<a href="share.php" class="list-group-item">
    				<h4 class="list-group-item-heading">Share Accounts</h4>
    				<p class="list-group-item-text"></p>
  				</a>
          <a href="share-nomatch.php" class="list-group-item">
            <h4 class="list-group-item-heading">Share Account - No Match</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks-botadd.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks - Deemphasized Add Button</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks-topadd.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks - Top Add Button</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks-dualadd.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks - Mixed Position Add Button</h4>
            <p class="list-group-item-text"></p>
          </a>
          </a>
          <a href="banks-enrolled.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks Enrolled</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks-enrolled-continue.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks Enrolled with Additional</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks-unenrolled.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks Mutiple to Enroll on Sign-in</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks-enrolled-logout.php" class="list-group-item">
            <h4 class="list-group-item-heading">Banks Enrolled Sign Out</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="bank-detail.php" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Detail</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="bank-detail-share.php" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Detail - With Sharing</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="account-detail.php" class="list-group-item">
            <h4 class="list-group-item-heading">Account Detail (Transactions)</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="add-new-bank-alt.php" class="list-group-item">
            <h4 class="list-group-item-heading">Add New Bank</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="search-results.php" class="list-group-item">
            <h4 class="list-group-item-heading">Search Results</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="loading.php" class="list-group-item">
            <h4 class="list-group-item-heading">Loading</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="faq.php" class="list-group-item">
            <h4 class="list-group-item-heading">FAQ</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="faq-login.php" class="list-group-item">
            <h4 class="list-group-item-heading">FAQ - Login</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="customer-service.php" class="list-group-item">
            <h4 class="list-group-item-heading">Customer Service</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="customer-service-login.php" class="list-group-item">
            <h4 class="list-group-item-heading">Customer Service - Login</h4>
            <p class="list-group-item-text"></p>
          </a>
			</div>

		</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>

>>>>>>> parent of 24850f3... Redirect straight to walkthrough
