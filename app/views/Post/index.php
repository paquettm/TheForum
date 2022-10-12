<html>
<head>
	<title>Login</title>
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
<a href='/Main/add'>Add your new message</a><br>

<table>
	<tr><th>Author</th><th>Message</th><th>action</th></tr>
<?php
	foreach ($data as $item) {
		echo "<tr>
			<td>$item->author</td>
			<td>$item->message</td>
			<td>
				<a href='/Main/edit/$item->post_id'>edit</a> |
				<a href='/Main/delete/$item->post_id'>delete</a>
			</td>
		</tr>";

	}
?>
</table>
</body>
</html>