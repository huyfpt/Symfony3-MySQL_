<?php
$n = 0;
echo "<h2>Break demo</h2>";
for($i =0; $i <= 100; $i++){
if($n < 5){
if($i % 8 == 0 && $i > 0){
	echo $i . "</br>";
	 $n++;
		}
	}else{
		break;
	}
}

echo "<h2>Continue demo</h2>";
for($i =0; $i <= 10; $i++){
	if($i==4 || $i==9) continue; // lệnh continue sẻ đi qua nhửng biến đả đc gắn như ví dụ nó sẻ không in ra 4 và 9 vì nó đc bỏ qua 
		echo $i ."</br>";
	
}
?>