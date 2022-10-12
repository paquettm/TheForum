<html>
<head>
	<title>Password-Protected Public Posts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<?php
		if(isset($_GET['error'])){
		?>
		<div class="alert alert-danger" role="alert">
			<?=$_GET['error']?>
		</div>
		<?php
		}
		?>
		<h1>Password-Protected Public Posts</h1>
		<p class="lead">To add a new post, click "Add your new post". To edit your post, click "edit" next to your post. To delete your post, click "delete" next to your post.</p>
		<a href='/Main/add' class='btn btn-primary'>Add your new post</a><br>

		<table class='table'>
			<tr><th>Post</th><th>action</th></tr>
		<?php
			foreach ($data as $item) {
				echo "<td><em>$item->author</em> wrote:<br>
					$item->message</td>
					<td>
						<a href='/Main/edit/$item->post_id' class='btn btn-secondary'>edit</a>
						<a href='/Main/delete/$item->post_id' class='btn btn-danger'>delete</a>
					</td>
				</tr>";

			}
		?>
		</table>
	</div>
</body>
</html>