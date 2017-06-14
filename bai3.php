<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Câu điều kiện - máy tính casino</title>
</head>
<style type="text/css">
	.content{
		margin: auto;
		width: 30%;
	}
	.row{
		padding: 10px;
		display: block;
	}
</style>
<body>
	<?php  
		$n1 = "";
		$n2 = "";
		$cal = "";
		if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])) {
			$n1 = $_POST["number1"];
			$n2 = $_POST["number2"];
			$cal = $_POST["caculate"];
			switch ($cal) {
				case '+':
					$result = $n1 + $n2;
					break;
				case '-':
					$result = $n1 - $n2;
					break;
				case '*':
					$result = $n1 * $n2;
					break;
				default:
					$result = $n1 / $n2;
					break;
			}
		}
	?>
	<div class="content">
		<h1>Mô phỏng máy tính điện tử</h1>
		<form method="post">
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="number1" value="<?php echo $n1; ?>">
			</div>
			<div class="row">
				<span>Phép toán</span>
				<input type="text" name="caculate" value="<?php echo $cal; ?>">
			</div>
			<div class="row">
				<span>Số thứ hai</span>
				<input type="text" name="number2" value="<?php echo $n2; ?>">
			</div>
			<div class="row">
				<input type="submit" name="" value="Xem kết quả">
			</div>
			<div class="row">
				<p>Kết quả: <?php echo $n1 . " ".$cal. " ".$n2." = ".$result; ?></p>
			</div>
		</form>
	</div>
</body>
</html>