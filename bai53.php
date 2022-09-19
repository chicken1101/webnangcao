<!-- Viết chương trình PHP để tính bán kính và tọa độ trọng tâm (x, y) của một đường tròn được tạo bởi ba điểm cho trước trên mặt phẳng. -->
<?php
$x1 = 0; $y1 = 0; $x2 = 2; $y2 = 0; $x3 = 2; $y3 = 2;
 $a1 = 2 * ($x2 - $x1);
 $b1 = 2 * ($y2 - $y1);
 $c1 = $x1 * $x1 - $x2 * $x2 + $y1 *$y1 - $y2 * $y2;
 $a2 = 2 * ($x3 - $x1);
 $b2 = 2 * ($y3 - $y1);
 $c2 = $x1 * $x1 - $x3 * $x3 + $y1 *$y1 - $y3 * $y3;
 $x = ($b1 * $c2 - $b2 * $c1) / ($a1 * $b2 - $a2 * $b1);
 $y = ($c1 * $a2 - $c2 * $a1) / ($a1 * $b2 - $a2 * $b1);
 $r = sqrt(($x - $x1) * ($x - $x1) + ($y - $y1) * ($y - $y1));
 printf("Central coordinate(x,y) and radius of the circle:\n");
 printf("(%.3f %.3f) %.3f\n", $x, $y, $r);
?>
