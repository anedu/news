<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body class="bg-light">
	<?php 
		$connect = mysqli_connect('127.0.0.1','root','', 'date');
		$query = mysqli_query($connect, "SELECT * FROM user");
	 ?>
	<div class="col-12 text-center"> <h1>Нoвостной сайт</h1> </div>
	<div class="col-12 d-flex mx-auto">
		<div class="col-6 mt-2 pt-5">
			<div class="col-10 mt-5 mx-auto">
				<h2 class="text-center mb-3">Регистрация</h2>
				<form action="reg.php" method="POST">
				 	<input type="" name="mail" class="form-control mb-2" placeholder="Электронная почта">
				 	<input type="" name="name" class="form-control mb-2 mt-1" placeholder="Имя и фамилия">
				 	<input type="" name="login" class="form-control mb-2 mt-1" placeholder="Имя пользователя">
				 	<input type="password" name="password" class="form-control mb-2 mt-1" placeholder="Пароль">
				 	<button class="btn btn-primary w-100 mt-2">
				 		Зарегистрироваться
				 	</button>
				</form>
			</div>
		</div>
		<div class="col-6 mt-2 pt-5">
			<div class="col-10 mt-5 mx-auto">
				<h2 class="text-center mb-5">Вход</h2>
				<form action="login.php" method="POST">
				 	<input type="" name="login" class="form-control mb-2 mt-1" placeholder="Имя пользователя">
				 	<input type="password" name="password" class="form-control mb-2 mt-1" placeholder="Пароль">
				 	<button class="btn btn-primary w-100 mt-2">
				 		Войти
				 	</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		<?php  
		if($_GET["q"] == "0")
			echo "alert('Нет такого пользователя');";
		if($_GET["q"] == "1")
			echo "alert('Вы успешно зарегистрировались');";
		?>
	</script>
</body>
</html>