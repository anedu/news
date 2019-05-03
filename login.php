<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'date');
$query = mysqli_query($connect, "SELECT * FROM user WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'");
if ($_POST['login'] == "admin" && $_POST['password'] == "admin") {
	header('Location: http://news/adminPanel.php');
}
else
if($query->num_rows==0){
	header('Location: http://news/index.php?q=0');
}
else {
	$obj = $query->fetch_assoc();
	header('Location: http://news/news.php?id='.$obj['id'].'');
	}
?>
