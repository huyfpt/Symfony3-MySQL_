<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagination</title>
<style type="text/css">
#tnt_pagination{
display:block;
text-align:left;
height:22px;
line-height:21px;
clear:both;
padding-top:3px;
font-family:Arial, Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size:12px;
font-weight::normal; 
}

#int_pagination a:link, #tnt_pagination a:visited{
padding:7px;
padding-top:2px;
padding-bottom:2px;
border:1px solid #EBEBEB;
margin-left:10px;
text-decoration::none;
background color:#F5F5F5;
color:#0072bc;
width:22px;
font-weight:normal; 
}

#tnt_pagination a:hover{
background-color:#DDEEFF;
border:1px solid#BBDDFF;
color:#0072BC; 
}

#tnt_pagination .active_tnt_link{
padding:7px;
padding-top:2px;
padding-bottom:2px;
horder:1px solid #DDEEFF;
margin-left::10px;
text-decoration:none;
background-color:#DDEEFF;
color:#0072BC;
cursor:defalt; 
}
#tnt_pagination .disabled_tnt_pagination{
padding:7px;
padding-top:2px;
padding-bottom::2px;
border:1px solid #EBEBEB;
margin-left:10px;
text-decoration:none;
background-color:#FSFSFS;
color:#D7D7DD7;
cursor:default;
}
</style>
</head>
<body>
<div id="tnt_pagination">
<span class="disabled_tnt_pagination">Prev</span>
<a<a href="03-pagination.php?page=1">1</a>
<a href="03-pagination.php?page=2">2</a>
<a href="03-pagination.php?page=3">3</a>
<a href="03-pagination.php?page=4">4</a>
<a href="03-pagination.php?page=5">5</a>

<a href="#forward">Next</a>
<?php
$page = (isset( $_GET["page"])== true) ? $_GET["page"] : "not choose navigation";
// isset là câu lệnh dùng khi user chưa thực thi các even trên form thỳ nó sẻ không báo lổi
?>
<p>page at <?php echo $page?></p>
</div>
</body>
</head>
</html>﻿
