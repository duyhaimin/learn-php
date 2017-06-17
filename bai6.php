<?php
	// tinh tống của các số trong cùng một số như 234 = 2+3+4 
	// 234 % 10 = 4 --- sum =4 --- digit = (234 -4)/10 = 23 --- > number = 23 ---> 23 %10 = 3 cứ tiếp tục 
	function sumDigit($number){
		$sum = 0;
		while ($number > 0) {
			$digit = $number % 10;
			$sum += $digit;
			$number = ($number - $digit) / 10;	
		}
		return $sum;
	}
	$result = sumDigit(123);
	echo $result . "<br>";

	// Mảng liên tục
	$course = array("PHP", "HTML", "CSS");
	if (!empty($course)) {
		foreach ($course as $key => $value) {
				echo $value ."<br>";
			}	
	}

	echo "Mảng lồng"."<br>";
	$student = array(   "SV01" => array("name" => "Hải",
							"sex" => 1,
							"score" => array(5,6,7)),
						"SV02" =>array("name" =>"KBC",
							"sex" => 1,
							"score" => array(5,7,8)),
						"SV03" =>array("name" => "Join",
							"sex" => 0,
							"score" => array(4,5,9)),);
	if (!empty($student)) {
		foreach ($student as $key => $value) {
			$name = $value["name"];
			$sex = ($value["sex"] == 1) ? "Boy": "Girl";
			$score = $value["score"];

			$total = 0;
			for ($i=0; $i < count($score); $i++) { 
			 	$total += $score[$i];
			 }
			 $total2 = array_sum($value["score"]);
			 echo "Name ".$name. " sex ".$sex . " Tổng điểm" .$total. "<br>"; 
			 echo "Name ".$name. " sex ".$sex . " Tổng điểm" .$total2. "<br>"; 
		}
	}

 ?>