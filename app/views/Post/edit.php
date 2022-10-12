<html>
<head>
	<title>Message Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>
Modify the Author and Message as needed and provide the existing password to save the changes.
<form action='' method='post'>
	<label>Author:<input type="text" name="author" value='<?=$data->author ?>' /></label><br>
	<label>Message:<textarea name='message'><?=$data->message ?></textarea></label><br>
	<label>Password:<input type="password" name="password" /></label><br>
	<input type="submit" name="action" value="Edit the Message" />
</form>

</body>
</html>