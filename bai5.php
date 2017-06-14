<!DOCTYPE html>
<html>
<head>
	<title>Vòng lặp While</title>
</head>
<body>
	<div class="content">
		<h2>Vẽ tam giác</h2>
		<ul>
			<li>
				<a href="bai5.php?type=1">Vẽ 1</a>
			</li>
			<li><a href="bai5.php?type=2">Vẽ 2</a></li>
			<li><a href="bai5.php?type=3">Vẽ 3</a></li>
		</ul>
		<div class="result">
			<?php 
				$result ="";
				if (isset($_GET["type"])) {
					$type = $_GET["type"];
					switch ($type) {
						case 1:
							$i =1;
							while ($i <= 6) {
								$result .= str_repeat("*",$i)."<br>"; // cứ mỗi thêm thêm i phải nối thêm chuổi vào 
								$i++;
							}
							break;
						case 2: 
							$i =6;
							while ($i >=1) {
								$result .= str_repeat("*", $i)."<br>";
								$i--;
							}
							break;
						case 3: 
							$i = 1; 
							$n = 6;
							while ($i <= $n) {
								$space = str_repeat("&nbsp;&nbsp",$n - $i); // space là khoảng trắng mà mình cần tính từ đề
								/*
								*				* 			i =1, space = 5 và 1 * (space = n-i, và * = i*2 -1)
								*              ***			i = 2, space = 3 và 3 * 
								*             *****
								*            ******* 
								*           *********
								*          ***********    
								*
								*/
								$character = str_repeat("*", 2*$i -1);
								$result .= $space . $character. "<br>";  // nối liên 2 chuỗi space và charactor
								$i++;
							}
							break;
						default:
							# code...
							break;
					}
				}
				echo $result;
			 ?>
		</div>
	</div>
</body>
</html>