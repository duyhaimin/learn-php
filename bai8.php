<!DOCTYPE html>
<html>
<head>
	<title>Exercise Array 2</title>
</head>
<body>
	<?php 
		$data = file('questions.txt') or die("can not read file");
		array_shift($data);
		$arrQuestion = array();
		foreach ($data as $key => $value) {
			$tmd = explode("|", $value);
			$id = $tmd[0];
			$question = $tmd[1];
			$arrQuestion[$id] = array("question" =>$question);			
		}
		echo "<pre>";
		print_r($arrQuestion);
		echo "</pre>";
	 ?>
</body>
</html>