<?php 
	$connect = mysqli_connect('127.0.0.1','root','', 'date');
	$sql = "INSERT INTO comm (comm_text,comm_id) VALUES ('".$_POST['text']."','".$_POST['id']."')";
	$query = mysqli_query($connect, $sql);
	header('Location: http://news/news.php?id='.$_POST['id'].'');
 ?>