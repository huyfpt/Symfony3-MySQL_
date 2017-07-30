<?php
//có thể dùng in 1 chuổi chung hoặc rời
echo "<h2> huy dep trai </h2>";
echo "<h2>", "huy", "dep", "trai","</h2>";
//có thể dùng in các biến số
$x = 5;
$y = 6;
echo "Sum: $x + $y";
// echo được dùng với hai loại dấu đó là '' và ""
/*khi echo '' nếu bạn in 1 chuổi thỳ nó không có chuyện 
gì cả nhưng khi bạn in biến thỳ nó sẻ không in được
giá trị của biến ra bên trong*/
//ví dụ
echo '<br> Sum: $x + $y' .'</br>';

// típ theo là Print
// print được sử dụng theo 2 cách
print "hello";
echo "<br></br>";
print ("hi!");
//tương tự tự với echo print có thể in ra giá trị của biến số
echo "<br></br>";
print "Sum: " .($x + $y);
/*
kết luận 
câu lệnh echo có thể in ra nhiều biến số còn print thỳ chỉ 1 vài 
câu lệnh echo truy xuất nhanh hơn print.
*/
?>