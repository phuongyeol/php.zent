<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Đếm số lần xuất hiện của mỗi phần tử trong mảng</label>
	<?php 
		$array1 = array(1,3,9,6,13,13,2,7,9,13,9,7,2);
		echo "<br/>"."Mảng cần đếm: "."<br/>";
		foreach ($array1 as $value) {
			echo "$value, ";
		}
		echo "<br/>";

		$array2 = array();		
		/*đếm số lượng mỗi phần tử của mảng 1 lưu vào mảng 2
		 trong đó: array2: $key => $value: số cần đếm => số lượng các số cần đếm 
		 */
		foreach ($array1 as $value) {
			$new = true;
			foreach ($array2 as $key => $value1) {
				if($value == $key){
					$array2[$value] = $value1 + 1;
					$new = false;
				} 
			}
			if($new){
				$array2[$value]=1;
			}			
		}
		foreach ($array2 as $key => $value) {
			echo "Số $key xuất hiện $value lần"."<br/>";
		}

	?>
</body>
</html>