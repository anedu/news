<?php $connect = mysqli_connect('127.0.0.1','root','', 'date');
$query = mysqli_query($connect,"INSERT INTO user (name,mail,password,login) VALUES ('".$_POST['name']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['login']."')");
header('Location: http://news/index.php?q=1'); ?>