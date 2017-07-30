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

</style>
<?php
$res 	="";
$n1 	="";
$n2 	="";
$cacul 	="";
$flag = true;
if(isset($_POST["num1"]) && isset($_POST["cal"])&& isset($_POST["num2"])){
	$n1 	= $_POST["num1"];
	$cacul  = $_POST["cal"];
	$n2 	= $_POST["num2"];
	if(is_numeric($n1) && is_numeric($n2)){
	switch($cacul){
		case "+":
		$res = $n1 + $n2;
		break;
		case "-":
		$res = $n1 - $n2;
		break;
		case "*":
		case "x":
		$res = $n1 * $n2;
		break;
		case "/":
		case ":";
		$res = $n1 / $n2;
		break;
		default :
		$res = $n1 + $n2;
		$cacul = "+";
		}
	}else{
	$res= "Input NUMBER not word ot special char";
	$flag = false;
	}
}
?>
<div class="content">
<form method="post" action="#" name="main">
<div class="row">
	<h1>Caculate</h1>
	<span>Input first number: </span>
	<input type="text" name="num1" value="<?php echo $n1 ?>" />
	</div>
	<br>
	<div class="row">
	<span>Input caculate: </span>
	<input type="text" name="cal" value="<?php echo $cacul ?>" />
	</div>
	<br>
	<div class="row">
	<span>Input second number: </span>
	<input type="text" name="num2" value="<?php echo $n2 ?>" />
	</div>
	<br>
	<div class="row">
	<input type="submit" name="submit"/>
	</div>
	<p><?php 
	if($flag == true){
	echo "Resulf: ". $res;
	} else{
	echo $res;
	}
	 ?></p>
</form>
</div>
</body>
</html>