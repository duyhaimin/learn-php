<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Phân trang</title>
</head>
<style type="text/css">
	.content{
		margin: 10px auto;
		width: 800px;
		text-align: center;
	}
	a{
		padding: 20px;
	}
	p{
		text-align: center;
	}
</style>
<body>
<?php 
	$var = "PHP learn ";
	$result = (is_string($var) == 1)?"String":"Not string";
	echo $result;
 ?>
 <div class="content">
 	<a href="bai2.php?page=1">1</a>
 	<a href="bai2.php?page=2">2</a>
 	<a href="bai2.php?page=3">3</a>
 	<a href="bai2.php?page=4">4</a>
 	<a href="bai2.php?page=5">5</a>
 	<a href="bai2.php?page=6">6</a>
 	<a href="bai2.php?page=7">7</a>
 	<a href="bai2.php?page=8">8</a>
 	<a href="bai2.php?page=9">9</a>
 </div>
 <?php 
 	$page = (isset($_GET["page"])==true)?$_GET["page"]:0;
  ?>
 <p>Bạn đang ở trang thứ <?php echo $page; ?></p>
</body>
</html>
