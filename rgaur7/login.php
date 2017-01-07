<?php include ('config/setup.php'); ?>
<!Doctype html>
<html>

<head> 
	<title><?php echo $page['title'].' | '.$site_title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('config/css.php'); ?>
	<?php include('config/js.php'); ?>

</head>
	
<body>
	<div id="wrap">

		<?php include (D_TEMPLATE.'/navigation.php');?>

		<div class="container">
			<h1>Login Admin</h1>
  			<form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
			    <div class="col-sm-4">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
			    <div class="col-sm-4">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-4">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-4">
			      <button type="submit" class="btn btn-default">Sign in</button>
			    </div>
			  </div>
			</form>
		</div>
		

	</div>
	<!--END WRAP-->

	<?php include (D_TEMPLATE.'/footer.php');?>

	
</body>

</html>