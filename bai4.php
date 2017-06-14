<!DOCTYPE html>
<html>
<head>
	<title>Chòm sao</title>
</head>
<style type="text/css">
	.content{
		margin: auto;
		width: 30%;
	}
	.row{
		display: block;
		margin: 5px;
	}
</style>
<body>
<?php 
	$d = "";
	$m = "";
	$images = "";
	$name = "";
	$time = "";
	if (isset($_POST["day"]) && isset($_POST["month"])) {
		$d = $_POST["day"];
		$m = $_POST["month"];
		if (is_numeric($d) && is_numeric($m)) {
			/*
				Capricorn 23/12 - 19/01 Ma kết
				aquarius 20/01 - 19/02 Bảo Bình
				Pisces 20/02 - 21/03 Song ngư
			*/
				$flag = true;
			switch ($m) {
				case 1:
					if ($d <= 19) {
						$images = "capricorn";
						$name = "Ma Kết";
						$time = "23/12 - 19/01";
					}
					if ($d > 19) {
						$images = "aquarius";
						$name ="Bảo Bình";
						$time = "20/01 - 19/02";
					}
					if ($d < 1 || $d >31) {
						$flag = false;
					}
					break;
				case 2:
					if ($d <=19) {
						$images = "aquarius";
						$name = "Bảo Bình";
						$time = "20/01 - 19/02";
					}
					if ($d > 19) {
						$images = "pisces";
						$name ="Song ngư";
						$time = "20/02 - 21/03";
					}
					if ($d < 1 || $d > 29) {
						$flag = false;
					}
					break;
				default:
					$flag = false;
					break;
			}
		}
		else {
			$flag = false;
		}
	}
 ?>
	<div class="content">
		<h2>Bạn thuộc chòm sao nào</h2>
		<form method="post">
			<div class="row">
				<span>Ngày sinh</span>
				<input type="text" name="day">
			</div>
			<div class="row">
				<span>Tháng sinh</span>
				<input type="text" name="month">
			</div>
			<div class="row">
				<input type="submit" name="" value="Lấy chòm sao">
			</div>
			<?php 
				if ($flag == true) {
			?>	
				<div class="result">
					<img src="images/<?php echo $images;?>.jpg" alt="">
					<p>Kết quả: <?php echo $name; ?> (<span><?php echo $time; ?></span>)</p>
				</div>
			<?php
			}
			else {
				echo "Dữ liệu không hợp lệ";
			}
			 ?>
		</form>
	</div>
</body>
</html>