<?php 
 	$firstname = "kbc";
 	$lastname = "hai";
 	$fullname = $firstname ." ".$lastname;
 	echo $fullname;
 	echo "</br>";
 	$number = 11;
 	echo $number;
 	echo "</br>";
 	// xác định lastname là kiểu dữ liệu gì, với độ dài bao nhiêu, in ra màn hình
 	var_dump($lastname);

 	//xác định nó là kiểu dữ liệu gì
 	echo "<br>";
 	echo gettype($number);

 	//ep kiểu dữ liệu
 	echo "<br>";
 	$a = 12.04;
 	echo $a;
 	echo "<br>";
 	//chuyển a sang kiểu integer 
 	echo (int)$a;
 	echo "<br>";
 	// sử dụng gettype để ép kiểu
 	settype($a, "integer");
 	echo $a;
 	// kiểm tra dữ liệu của một biến nào đó is_numeric(), is_float(), is_string(), is_array(), is_object().... nếu là 1 thì true còn không trả về gì thì flase
 	echo "<br>";
 	echo is_numeric($number);
 	echo "<br>";
 	// Định nghĩa hằng số 
 	define("PI", 3.14);
 	echo "Value PI".PI;
 	echo "<br>";
 	define("kbc", "Lê Duy Hải");
 	echo kbc;
 ?>
