<?php
//if condition
$num = -1;
if($num >0 ){
	echo "right";
}else{
	echo "wrong";
}
// viết ngắn gọn 
$res = ($num >0 )? "dung" : "sai";
echo "<br></br>". $res;
?>