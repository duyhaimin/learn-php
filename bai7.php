<!DOCTYPE html>
<html>
<head>
	<title>Exercise Array 01</title>
</head>
<body>
	<div class="content">
		<?php 
			$group = array("1" => "admin", "2" => "manager", "3" => "guest", "4" => "menber");
			$city = array("hcm" => "thành phố hồ chí minh", "2" => " hà nội", "3" => "Bình phước", "4" =>"Vũng tàu");
			function createSelectbox($name, $attribute, $array, $keySeclect){
				$xhtml = "";
				if (!empty($array)) {
					$xhtml .= '<select name="'.$name.'" id="'.$name.'" style = "'.$attribute.'" >';
					foreach ($array as $key => $value) {
						if ($key == $keySeclect) {
							$xhtml .='<option value="'.$key.'" selected = "selected">'.$value.'</option>';
						}
						else{
							$xhtml.= '<option value="'.$key.'">'.$value.'</option>';
						}
					}
					$xhtml.='</select>';
				}
				return $xhtml;
			}
			$groupSelect = createSelectbox("group","width: 200px", $group, 2);
			$citySelect = createSelectbox("city","", $city, 1);
			echo $groupSelect. '</br>';
			echo $citySelect;
		 ?>
	</div>
</body>
</html>