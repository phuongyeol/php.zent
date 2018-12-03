<meta charset="utf-8">
<?php 
// Ví dụ 3: For
	echo "3.1 Vòng lặp For:";
	for ($i=0; $i < 10 ; $i++) { 
		echo "<br> &emsp; Mãi Mãi là Bao Xa!";
	}
	echo "<br> 3.2 Tính tổng: ";
	$sum1 = 0;
	for ($i=0; $i <=100 ; $i++) { 
		$sum1 = $sum1+$i;
	}
	echo "<br> &emsp; S1 = 0+1+2+ ... +100 = ".$sum1;
	$sum2=0;
	for ($i=1; $i<=100 ; $i++) { 
		$sum2 = $sum2 + 1/$i;
	}
	echo "<br> &emsp; S2 = 1+ 1/2+1/3+ ... +1/100 = ".$sum2;
	$sum3 = 0;
	for ($i=0; $i <=100 ; $i = $i+2) { 
		$sum3 = $sum3+$i;
	}
	echo "<br> &emsp; S3 = 2+4+6+ ... +100 = ".$sum3;
	$sum4 = 0;
	for ($i=1; $i <9 ; $i=$i+2) { 
		$sum4 = $sum4+$i*$i;
	}
	echo "<br> &emsp; S4 = 1^1 + 1^2 + ... + 9^2 = ".$sum4;

//Ví dụ 4: While - Do While:
	echo "<br> 4.1 While:";
	$i=0;
	while ($i <= 10) {
		echo "<br> &emsp; Mãi Mãi là Bao Xa!";
		$i++;
	}
	echo "<br> 4.2 Do-While:";
	$i=0;
	do {
		echo "<br> &emsp; Mãi Mãi là Bao Xa!";
		$i++;
	} while ($i <= 10);

//Ví dụ 5: Vòng lặp Foreach:
	echo "<br> 5.1 Mảng";
	$arr = array("Phương", "0973653820", 1997);
	//Thêm phần tử cho mảng: 
	$arr[] = "CodeYourLife"; // thêm vào cuối mảng
	$arr[4] = "www.facebook.com/phuong.yeolyeol"; //thay thế cho phần tử ở vị trí số 4
	// In dữ liệu mảng:
	echo " <pre>";
		print_r($arr);
	echo "</pre>";
	var_dump($arr);
	//snipet +sublimetext

	echo "<br> &emsp; INFO: ";
	echo "<br> &emsp; -----------------------";
	echo "<br> &emsp; Name: ".$arr[0];
	echo "<br> &emsp; Phone: ".$arr[1];
	echo "<br> &emsp; Birth: ".$arr[2];
	echo "<br> &emsp; Slogan: ".$arr[3];
	echo "<br> &emsp; Facebook: <a href=\"".$arr[4]."\">".$arr[4]."</a>";

	// Key trong mảng: 
	$info['name'] = "Phương";
	$info['phone'] = "0973653820";
	$info['birth'] = 1997;
	$info['slogan'] = "CodeyourLife";
	$info['link'] = "www.facebook.com/phuong.yeolyeol";

	echo "<br><br> &emsp; INFO: ";
	echo "<br> &emsp; -----------------------";
	echo "<br> &emsp; Name: ".$info['name'];
	echo "<br> &emsp; Phone: ".$info['phone'];
	echo "<br> &emsp; Birth: ".$info['birth'];
	echo "<br> &emsp; Slogan: ".$info['slogan'];
	echo "<br> &emsp; Facebook: <a href=\"".$info['link']."\">".$info['link']."</a>";


	echo "<br> 5.2 Vòng lặp foreach:";
	foreach ($info as $key => $value) {
		echo "<br> &emsp; Key: $key - Value: $value";
	}
	//In ra giá trị: 
	foreach ($info as $key ) {
		echo "<br> &emsp; Value: $key";
	}
	$mmlbx = array('Dương Lam Hàng', 'Bạch Lăng Lăng', 'Trịnh Minh Hạo' );
	foreach ($mmlbx as $chimuc => $actor) {
		echo "<br> &emsp;".$chimuc.'=>'.$actor;
	}
 ?>