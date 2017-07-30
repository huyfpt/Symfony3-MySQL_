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
}
.content h1{
	color: red;
	text-align: center;
}
.content div.row{
	margin-top: 20px;
}
.content div.row span{
	display: inline-block;
	width: 255px;
	text-align: right;
}
.content div.row input[type =text]{
padding: 3px 5px;
}
.content div.row input[type= submit]{
	padding: 3px, 5px;
	display: block;
	margin: 0px auto 20px auto;
}
.content div.showRes{
	margin-left: 50px;
}
.content div.showRes img{
	width: 100px;
	height: 100px;
	overflow: hidden;
	float: left;
}
.content div.showRes p {
	text-align: justify;
	font-size: 22px;
	height: 100px;
	line-height: 100px;
}
.content div.showRes p span{
	font-style: italic;
}
</style>
<?php
$day ="";
$month="";
$image ="";
$nameImage ="";
$time ="";
$flag = true;
if(isset($_POST["num1"])&& isset( $_POST["num2"])){
	$day = $_POST["num1"];
	$month = $_POST["num2"];
	if(is_numeric($month) && is_numeric($day)){
		switch ($month) {
		case 1:
			if($day >=10 && $day <=11){
				$image ="abc"; $nameImage ="litte girl"; $time =" 10/01 - 11/01";
			} else{
				$flag = false;
				$res = "NOT FOUND";
			}
			break;
		case 5:
			if($day>=5 && $day <= 6){
				$image ="as"; $nameImage ="lady hot"; $time =" 06/05 - 07/05";
			} 
			 else{
			 	$flag = false;
				$res = "NOT FOUND";
			}
		default:
			break;
		}
	}else{
		$flag = false;
		$res = "NOT EXECUTE";
	}
}


?>
<div class="content">
<form method="post" action="#" name="main">
<div class="row">
	<h1>Get BirthDay</h1>
	<span>Input Day: </span>
	<input type="text" name="num1" value="<?php echo $day?>" />
	</div>
	<br>
	<div class="row">
	<span>Input month: </span>
	<input type="text" name="num2" value="<?php echo $month?>" />
	</div>
	<br>
	<div class="row">
	<input type="submit" name="submit"/>
	</div>
</form>

<?php
if($flag == true){
	$res ='<div class ="showRes">
<img src ="image/'.$image.'.jpg"/>
<p> '.$nameImage.' <span> -- '.$time.'</span></p>
</div>';
}else{
	$res;
}
echo $res;
?>

</div>
</body>
</html>