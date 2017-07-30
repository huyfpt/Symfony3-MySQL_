<?php
$username = $_POST["email"];
$pass 	  = $_POST["password"];
$resulf = ($username == "aaa@gmail.com" && $pass == "123" ) ? "success" : "fair";
echo $resulf;
?>

