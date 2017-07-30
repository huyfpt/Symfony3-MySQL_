<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<style type="text/css">
* {
	margin: 0px;
	padding: 0px;
}
.content{
	margin: 20px auto;
	width: 600px;
	border: 1px solid #999;
	padding: 10px;
	background: blue;
	/*chèn hình background : url("folderImage/nameImage.jpg") no-repeat;*/
}
.content h1{
	color: red;
	text-align: center;
}
.content ul{
	margin: 23px ;
}
.content ul li{
	margin-left: : 30px;
	display: inline-block;
	list-style: none;

}
.content img{
	width: 180px;
	height: 250px;
}
.content a {
	display: block;
}
</style>

<div class="content">
<h1>Drawing Rectangel</h1>
<ul>
	<li><a href="05-draw-Rectangel.php?type=1"><img src="image\a.jpg"/></a></li>
	<li><a href="05-draw-Rectangel.php?type=2"><img src="image\abc.jpg"/></a></li>
	<li><a href="05-draw-Rectangel.php?type=3"><img src="image\as.jpg"/></a></li>
</ul>
<div class="resulf">
	<?php
	$res = "";
	if(isset($_GET["type"])){
		$type = $_GET["type"];
		
			switch ($type) {
				case 1:
				$i=0;
				$n = 6;
				while ($i < $n) {
					$res .= str_repeat("handsome---", $i)."</br>";
					$i++;
				}
					break;
				case 2:
				$i=6;
				
				while ($i>=1) {
					$res .= str_repeat("litteGirl---", $i)."</br>";
					$i--;
				}
					break;
				case 3:
				$i=1;
				$n=6;
				$space="";
				$char ="";
				while ($i <= $n) {
					$space = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$n -$i);
					$char =  str_repeat("lady---", $i * 2 -1); // tính toán xếp tam giác theo số lẻ;
					$res .= $space. $char. "<br/>";
					$i++;
				}
					break;
	}
}
echo $res;
	?>
</div>
</div>
</body>
</html>