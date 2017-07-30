<?php
$element = array("Efirst--", "Efirst--2", "Elast--", "Elast--2");
	
	echo "<pre>";
	print_r($element);
	echo "</pre>";
	
	// $array có thể thay đổi nên ta thêm & có nghỉa tham chiếu
	function removeItem(&$array, $type ="first", $total = 2){
		$res = array(); //$res = array khai báo trên $element
		if($total > count($array)){
			$res = $array;
			$array = null;
		}else{
			if(!empty($array)){
			if($type == "first"){
				for ($i=1; $i <= $total ; $i++) { 
					$res[] = array_shift($array);
				}
			}else if($type == "last"){
				for ($i=1; $i <= $total ; $i++) { 
					$res[] = array_pop($array);
				}
			}
				
		}
		}
		
		return $res;
		}
	
	$arrItem = removeItem($element, "last", 1);
	echo "Remove" . "</br>";
	echo "<pre>";
	print_r($arrItem);
	echo "</pre>";
	echo "Element" ."</br>";
	echo "<pre>";
	print_r($element);
	echo "</pre>";
?>