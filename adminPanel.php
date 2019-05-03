<!DOCTYPE html>
<html>
<head>
	<title>aadminka</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<form action="insertPostAdmin.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="img">
		 <textarea class="form-control col-12" rows="3" id="text" placeholder="Введите ваш сообщение" name="text"></textarea>
		<button class="btn btn-primary" type="submit">
			POST
		</button>
	</form>
</body>
</html>