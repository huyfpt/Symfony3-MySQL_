<?php
$learn = array("toan","ly", "hoa","Sinh");
if(!empty($learn)){
for($i=0; $i < count($learn); $i++){
	echo $learn[$i] . "</br>";
}
	echo "-------------------------------------------------------------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------" . "</br>";
}
if(!empty($learn)){
foreach ($learn as $key => $value) {
	echo $value. "</br>";
}

}
	echo "-------------------------------------------------------------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------" . "</br>";

$number = array(1,2,3,5,6,7,8,44,88);
if(!empty($number)){
		foreach ($number as $key => $value) {
			if ($value %2 == 0 ) {
				echo "</br>"." những số chia hết cho 2----". $value."</br>";
			}else{
				echo "</br>"." không chia hết cho 2-----". $value. "</br>";
			}
		
	}
	
}

	echo "-------------------------------------------------------------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------" . "</br>";
//////////////////// mảng lồng 
$student = array("SV01" => array("huy"  ,"1", "score"=>array(5,7,9)),
				 "SV02" => array("thang","1","score"=>array(7,8,9)),
				 "SV03" => array("vy"   ,"0", "score"=>array(10,10,10)));

//echo $student["SV01"][0] . "</br>";
	
	if(!empty($student)){
		foreach ($student as $key => $value) {
			$name = $value[0];
			$sex = $value[1] ? "boy" : "girl";
			$score = $value["score"];
			$total = 0;
			for ($i=0; $i < count($score) ; $i++) { 
				$total += $score[$i];
			}
			echo "Name: ". $name . " ---- ". "Sex: ". $sex . " ---- " . "Score: ". $total. "</br>";
		}
	}
	echo "-------------------------------------------Array_values------------------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------------------" . "</br>";
	// in ra những value trong mảng ta dùng ; array_value($var);
	$newArray = array_values($learn);
	echo "array_values: " . "</br>";
	echo "<pre>";
	print_r($newArray );
	echo "</pre>";
	echo "--------------------------------------------Array_key-----------------------------------------------" . "</br>";
	echo "----------------------------------------------------------------------------------------------------" . "</br>";
	// in ra những keys trong mảng ta dùng ; array_key($var);-
	$newArray = array_keys($learn);
	echo "array_key: " . "</br>";
	echo "<pre>";
	print_r($newArray );
	echo "</pre>";
	echo "--------------------------------------------Array_pop---------------------------------------------" . "</br>";
	echo "--------------------------------------------------------------------------------------------------" . "</br>";
	// khi muốn loại bỏ phần tử cuối cùng của mảng ta dùng array_pop($var);
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($learn );
	echo "</pre>";
	$lastItem = array_pop($learn);
	echo "array_pop: " . "</br>";
	echo "<pre>";
	print_r($learn );
	echo "</pre>";
	echo "--------------------------------------------Array_shift-----------------------------------------------" . "</br>";
	echo "------------------------------------------------------------------------------------------------------" . "</br>";
	// khi muốn loại bỏ phần tử đầu tiên của mảng ta dùng array_shift($var);
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($learn );
	echo "</pre>";
	$firstItem = array_shift($learn);
	echo "shift: " . "</br>";
	echo "<pre>";
	print_r($learn );
	echo "</pre>";
	echo "---------------------------------------------Array_Unique----------------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------------------" . "</br>";
	// loại bỏ những phần tử trùng nhau trong array dùng array_unique($var);
	$arr = array("huy", "thang", "vy", "son", "vy", "aaa", "son");
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arr );
	echo "</pre>";
	$array = array_unique($arr);
	echo "Unique: " . "</br>";
	echo "<pre>";
	print_r($array );
	echo "</pre>";
	echo "--------------------------------------------Unset-----------------------------------------------" . "</br>";
	echo "------------------------------------------------------------------------------------------------" . "</br>";
	//xóa bỏ phần tử bất kì trong array dùng unset($var[key]);
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arr );
	echo "</pre>";
	unset($arr[4]);
	echo "Unset: " . "</br>";
	echo "<pre>";
	print_r($arr );
	echo "</pre>";
	echo "------------------------------------------------Array_push && Array_unshift-------------------------------------------" . "</br>";
	echo "----------------------------------------------------------------------------------------------------------------------" . "</br>";
	//thêm 1 hoặc nhiều phần tử ở đầu hoặc cuối array
	//array_push thêm cuối mảng
	$arrayP = array("Anh ","yeu ","em ");
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arrayP );
	echo "</pre>";
	array_push( $arrayP," nhieu", " lam");
	echo "array_push: " . "</br>";
	echo "<pre>";
	print_r($arrayP);
	echo "</pre>";
	//array_unshift thêm đầu mảng
	$arrayUs = array("Anh ","yeu ","em ");
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arrayUs );
	echo "</pre>";
	array_unshift( $arrayUs," Muon ", "noi");
	echo "array_unshift: " . "</br>";
	echo "<pre>";
	print_r($arrayUs);
	echo "</pre>";
	echo "------------------------------------------------------Array_revere-------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------------------" . "</br>";
	// đảo các phần tử trong array dùng array_reverse($var);
	$arrayR = array("anh ", "em ", "yeu");
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arrayR );
	echo "</pre>";
	$revere = array_reverse( $arrayR);
	echo "array_reverse: " . "</br>";
	echo "<pre>";
	print_r($revere);
	echo "</pre>";
	echo "-------------------------------------------------------Array_flip------------------------------------" . "</br>";
	echo "-----------------------------------------------------------------------------------------------------" . "</br>";
	// hoản đổi value ->key và ngược lại trong array dùng array_flip
	$arrayf = array("anh ", "em ", "yeu");
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arrayf );
	echo "</pre>";
	$flip = array_flip( $arrayf);
	echo "array_flip: " . "</br>";
	echo "<pre>";
	print_r($flip);
	echo "</pre>";
	echo "-------------------------------------------------------Array_sum, max min------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------------------------" . "</br>";
	// tổng của 1 mảng dùng array_sum($var), giá trị lớn nhất max, và ngược lại min;
	$arrNum = array(1,3,7,9,4,2,66,4, "dd", "ddsss",2,-55);
	$sum 	= array_sum($arrNum);
	$max	= max($arrNum);
	$min	= min($arrNum);
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arrNum );
	echo "</pre>";
	echo "Sum : ". $sum . "</br>";
	echo "Trung binh +:  ". $sum/$length ."</br>";
	echo "Max:  ". $max . "</br>";
	echo "Min:  ". $min ."</br>";
	echo "-------------------------------------------------------Array_count_value-------------------------------------" . "</br>";
	echo "-------------------------------------------------------------------------------------------------------------" . "</br>";
	// tính số (đếm) phần tử lập lại trong mảng
	echo "Raw" . "</br>";
	echo "<pre>";
	print_r($arrNum );
	echo "</pre>";
	$arrCN= array_count_values($arrNum);
	echo "array_count_value: " . "</br>";
	echo "<pre>";
	print_r($arrCN );
	echo "</pre>";
?>