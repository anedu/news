<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'date');
	$pageID = mysqli_query($connect, "SELECT * FROM user WHERE id='".$_GET['id']."'");
	?>
</head>
<body class="bg-light" style="position: relative">
	<?php 	
		$q = $pageID->fetch_assoc();
		//echo $q['name'];
		//echo $q['login'];
	 ?>

	 <div class="col-12 mx-auto text-center"> <h1>Новости</h1> </div>

	<div class="col-10 mx-auto mt-2" style=" max-width: 1920px; max-height: 1080px; min-width: 1420px; min-height: 798px">

		<?php 
			$connect = mysqli_connect('127.0.0.1', 'root', '', 'date');
			$query = mysqli_query($connect, "SELECT * FROM post");


			for($i=0;$i<$query->num_rows;$i++){
				$obj = $query->fetch_assoc();
				$qqq = mysqli_query($connect, "SELECT login FROM user WHERE id='".$obj['id']."'");
				$name = $qqq->fetch_assoc();
				?>
				<div class="col-12 d-flex">
					<div class="col-3 mt-3 mb-4 border bg-white px-0 ml-auto">
						<div class="col-12 px-0">
							<img src="<? echo $obj['post_img'] ?>" class="w-100 img-fluid">
						</div>
						<div class="col-12 px-0">
							<p><? echo $obj['post_text'] ?></p>
						</div>
					</div>
					<div class="col-3 mr-auto mt-3">

						<div data-spy="scroll" data-target="#myScrollspy" data-offset="10" style="height:200px ;overflow-y: scroll;">
			               <h4 id="content-javascript">
			               	<?php echo $q['login'] ?>
			               </h4>
			               <?php 
							$connect = mysqli_connect('127.0.0.1', 'root', '', 'date');
							$query = mysqli_query($connect, "SELECT * FROM comm");
							for($i=0;$i<$query->num_rows;$i++){?>
					<p><?php $comm=$query->fetch_assoc();
					echo $comm['comm_text']; }?></p>
				
			            </div>
			            <form action="insertComms.php" method="POST" class="mt-3 d-flex">
			            	<input type="" name="text" placeholder="Ваш комментарий" class="form-control col-8">
			            	<?php 
							echo '<input type="hidden" name="id" value="'.$q['id'].'">'
							 ?>
			            	<button  class="btn btn-primary w-25 ml-auto">go</button>
			            </form>
					</div>
				</div>
				<?
				}
		 		?>

	</div>

	
</body>
</html>



