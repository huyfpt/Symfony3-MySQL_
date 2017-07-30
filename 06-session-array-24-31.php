<?php
	echo "------------------------------------------current, next, prev, reset, end--------------------------------------------------" . "</br>";
	echo "---------------------------------------------------------------------------------------------------------------------------" . "</br>";
	$arr = array("huy", "dep", "trai", "qua");
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "Current: " . current($arr)."</br>";
	echo "Next:  " . next($arr)."</br>";
	echo "Prev: " .prev($arr)."</br>";
	echo "Reset: " . reset($arr)."</br>";
	echo "End: " . end($arr)."</br>";
	echo "------------------------------------------serilize, unserilize--------------------------------------------------" . "</br>";
	echo "----------------------------------------------------------------------------------------------------------------" . "</br>";
//Muốn đổi thành một chuổi đặt biệt từ mảng ta dùng serilize ngược lại ta dùng unserilize dùng cho database
	$arrSeri = array("huy", "dep", "trai", "qua");
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arrSeri);
	echo "</pre>";
	$resSeri = serialize($arrSeri);
	echo "Serilize: "."</br>";
	echo "<pre>";
	print_r($resSeri);
	echo "</pre>"; 
	echo "Unserilize--------------------------------------------------------------- ". "</br>";
	$resUnSeri = 'a:4:{i:0;s:3:"huy";i:1;s:3:"dep";i:2;s:4:"trai";i:3;s:3:"qua";}';
	$arrUnseri = unserialize($resUnSeri);
	echo "UnSerilize: "."</br>";
	echo "<pre>";
	print_r($arrUnseri);
	echo "</pre>"; 
	echo "------------------------------------------shuffle--------------------------------------------------" . "</br>";
	echo "---------------------------------------------------------------------------------------------------" . "</br>";
// khi muốn các phần tứ của 1 array được thay đổi 1 cách ngẩu nhiên ta dùng shufffle
	$arrSh = array("array", "shuffle","change", "random");
	shuffle($arrSh);
	echo "Shuffle: "."</br>";
	echo "<pre>";
	print_r($arrSh);
	echo "</pre>";
	echo "------------------------------------------array_walk--------------------------------------------------" . "</br>";
	echo "------------------------------------------------------------------------------------------------------" . "</br>";
// khi muốn in ra 1 list array mà không cần dùng vòng lặp for or foreach ta dùng : array_walk
	$arrW = array("huy", "dep","trai", "!!!");
	echo "Use foreach: " ."</br>";
	foreach ($arrW as $key => $value) {
		echo "Result: " . "value-- ". $value ."---" . "key-- ". $key . "</br>";
	}
	echo "</br>";
	echo "Use array_walk: ". "</br>";
	function myfuction($value, $key, $param){
		echo $key . $param . $value . "</br>";
	}
	echo array_walk($arrW, "myfuction", "---param---");

// array_walk có thể dùng để đưa về một mảng mới
	echo "Array_walk return new array "."<br>";
	$arrW2 = array(1,5,3,7,8);
	function myfuction2(&$value, $key, $param = 2){
		 	$value= $value * $param. "</br>";
	}
	array_walk($arrW2, "myfuction2", 2);
	echo "Array_walk: "."</br>";
	echo "<pre>";
	print_r($arrW2);
	echo "</pre>";
	echo "------------------------------------------array_map---------------------------------------------------" . "</br>";
	echo "------------------------------------------------------------------------------------------------------" . "</br>";
// khi muốn giử 1 hay nhiều mảng đến hàm nào để xử lí và trả về giá trị mới ta dùng array_map
	$arrMap = array(5,7,3,9,3,6,32);
	$newArr = array();
	echo "Using foreach: " . "</br>";
	foreach ($arrMap as $key => $value) {
		echo "Value: " . $value ."</br>";
		$newArr[] = ($value % 2 == 0) ? "even" : "odd";
	}
	echo "Array: "."</br>";
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	echo "using array_map: " ."</br>";
	function checkNumber($num){
		$res = ($num % 2 == 0 )? "Array_map --- even" : "Array_map --- odd";
		return $res;
	}
	$number =array_map("checkNumber", $arrMap);
	echo "Array: "."</br>";
	echo "<pre>";
	print_r($arrMap);
	echo "</pre>";
	echo "Array_map: "."</br>";
	echo "<pre>";
	print_r($number);
	echo "</pre>";
	echo "------------------------------------------array_slice---------------------------------------------------" . "</br>";
	echo "--------------------------------------------------------------------------------------------------------" . "</br>";
// khi chúng ta muốn trích xuất phần tử của mảng từ đâu đên đâu ta dùng array_slice
	$arrSlice1 = array("d","f","r","a","y","q");
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arrSlice1 );
	echo "</pre>";
	$newArrSlice = array_slice($arrSlice1, 3, 2, true);
	// param1 = $array, param2 = offset lấy từ key nào, param3 = lấy bao nhiêu key trong array dự theo offset, param4 = tạo ra 1 mảng mới nếu = false;
	echo "array_slice: " . "</br>";
	echo "<pre>";
	print_r($newArrSlice );
	echo "</pre>";
	echo "------------------------------------------sort value----------------------------------------------------" . "</br>";
	echo "--------------------------------------------------------------------------------------------------------" . "</br>";
// sắp xếp array theo value tăng dần
	$arrSort = array(3,55,31,33,66,88,1,2,36,7,76);
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	sort($arrSort);
	echo "Sort value: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	echo "--------------------------------------------------------------------------------------------------------" . "</br>";
// sắp xếp array theo value giảm dần
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	rsort($arrSort);
	echo "Re Sort value: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	echo "------------------------------------------sort Key----------------------------------------------------" . "</br>";
	echo "--------------------------------------------------------------------------------------------------------" . "</br>";
// sắp xếp array theo key tăng dần
	$arrKey = array(3,55,31,33,66,88,1,2,36,7,76);
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	ksort($arrKey);
	echo "Sort key: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	echo "--------------------------------------------------------------------------------------------------------" . "</br>";
// sắp xếp array theo value giảm dần
	echo "Raw: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
	krsort($arrKey);
	echo "Re Sort key: " . "</br>";
	echo "<pre>";
	print_r($arrSort);
	echo "</pre>";
?>