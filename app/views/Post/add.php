<html>
<head>
	<title>Message Create</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<h1>Instructions</h1>
		<p class="lead">To add a new post, enter the author name or email, the message, as well as a modification password and modification password confirmation (same password). Click "Add Post" to save the new post.</p>
		<?php
		if(isset($_GET['error'])){
		?>
		<div class="alert alert-danger" role="alert">
			<?=$_GET['error']?>
		</div>
		<?php
		}
		?>

		<form action='' method='post'>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Author:<input class='form-control' type="text" name="author" placeholder="author name or email"/></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Message:<textarea class='form-control' name='message' placeholder="Message"></textarea></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Modification password:<input class='form-control' type="password" name="password" placeholder="Password" /></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Modification password confirmation:<input class='form-control' type="password" name="password_confirm" placeholder="Password confirmation" /></label>
			</div>
			<input class='btn btn-primary' type="submit" name="action" value="Add Post" />
		</form>
		<a href='/Main/index' class='btn btn-secondary'>Cancel</a>
	</div>
</body>
</html>