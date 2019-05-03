<?php 
	$connect = mysqli_connect('127.0.0.1','root','', 'date');
	$sql = "INSERT INTO post (id, post_img, post_text) VALUES ('".$_POST['id']."', 'images/".$_FILES['img']['name']."','".$_POST['text']."')";
	$query = mysqli_query($connect, $sql);
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
	header('Location: http://news/adminPanel.php');
 ?>