<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<img src="image/caudo.png"/>
<?php
//$x =""; số ng iu nhau
//$y=""; số ng ghét nhau
for($x=1; $x <= 30; $x++){
	for($y = 1; $y <= 9 ; $y++){
		if(3*$x + 10*$y ==100 && $x +$y ==17){
		echo "số người iu nhau ". $x ."số người ghét nhau". $y ."<br/>";
		}
	}	
}
?>
</form>
</body>
</html>