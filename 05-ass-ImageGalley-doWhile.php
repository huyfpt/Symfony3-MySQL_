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
	width: 200px;
	border: 1px solid #999;
	padding: 10px;
	/*background: blue;*/
	/*chèn hình background : url("folderImage/nameImage.jpg") no-repeat;*/
}
.content h1{
	color: red;
	text-align: center;
}
.content .image {
	margin: 20px, 0px;
	text-align: center;
}
.content .image img{
	width: 180px;
	height: 250px;
	margin: 10px, 0px;
}
.content img{
	width: 180px;
	height: 250px;
	margin: 10px, 0px;
}
.content .image a {
	display: inline-block;
	background: red;
}
</style>

<div class="content">
<h1>Image Galley</h1>

	<div class="image">
	<?php
	$i =1;
	$flagshow="";
	do{
	echo $i.'<img src="image\abc.jpg"/>';
	$flagShow = 0;
	if(isset($_GET["show"])){
	$flagshow = $_GET["show"];
	$i++;
	}
	}while($i <= 4 && $flagshow ==1);
	?>
	<a href="05-ass-ImageGalley-doWhile.php?show=1">Show All</a>
	<a href="05-ass-ImageGalley-doWhile.php?show=0">Back</a>
	</div>
</div>
</body>
</html>