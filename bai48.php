<!-- Viết chương trình PHP để kiểm tra xem ba độ dài (số nguyên) ba cạnh cho trước có tạo thành tam giác vuông hay không. In "Có" nếu các cạnh cho trước tạo thành tam giác vuông, nếu không thì in "Không". -->
<?php
$a = 5;
$b = 3;
$c = 4;
$a *= $a;
$b *= $b;
$c *= $c;
if($a + $b == $c || $a + $c == $b || $b + $c == $a){
    echo "YES\n";
}
else
{
    echo "NO\n";
    }
?>
