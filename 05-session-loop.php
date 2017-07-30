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
	margin: 23px 0px 0px 100px;
}
.content ul li{
	margin-top: 5px;
	list-style: decimal;
}
</style>

<div class="content">
<h1>Writting punish</h1>
<ul>
	<?php
	for($i= 0; $i < 10; $i++){
		echo "<li>FOR loop</li>";
	}
	/////////////////////////////////////////////////////////// while loop
	$a =0;
	while ($a < 10) {
		echo "<li>while LOOP</li>";
		$a++;
	}
	/////////////////////////////////////////////////////////// da while 
	$b = 1;
	do{
		echo "<li>do.... while LOOP</li>";
		$b++;
	}while($b<=10)

	//note: trong vòng lặp do...while trước khi kiểm tra điều kiện nó sẻ thực thi chạy câu lệnh 1 lần trong vòng lặp rồi nó mới xét điều kiện.
	/* ví dụ
	$b = 1111;
	do{
		echo "<li>do.... while LOOP</li>";
		$b++;
	}while($b<=10)
	*/
	?>
</ul>
</div>
</body>
</html>