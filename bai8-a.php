<?php 
	$data = file('options.txt') or die("can not read file");
	$arrOption = array();
	foreach ($data as $key => $value) {
		$tmp = explode("|", $value);
		$questionId = $tmp[0];
		$optionId 	= $tmp[1];
		$answer 	= $tmp[2];
		$point 		= $tmp[3];

		$arrOption[$questionId][$optionId]['option'] 	= $answer;
		$arrOption[$questionId][$optionId]['point']		= $point;

		
	}
	echo "<pre>";
	print_r($arrOption);
	echo "</pre>";

 ?>