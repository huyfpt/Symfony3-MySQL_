<?php
$a = 1;
function test(){
	
	static $b = 1;
	echo $b;
	++$b;
}
test();
test();
test();
test();
?>