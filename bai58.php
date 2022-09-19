<!-- Có hai đường tròn C1 với bán kính r1, tọa độ trung tâm (x1, y1) và C2 với bán kính r2 và tọa độ trung tâm (x2, y2)
Viết một chương trình PHP để kiểm tra những điều sau -
"C2 ở C1" nếu C2 ở C1
" C1 nằm trong C2 "nếu C1 nằm trong C2
" Chu vi C1 và C2 cắt nhau "nếu chu vi C1 và C2 cắt nhau và và" C1 và C2 không trùng nhau "nếu C1 và C2 không trùng nhau. -->
<?php
$n = intval(fgets(STDIN));
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, "%lf %lf %lf %lf %lf %lf", $xa, $ya, $ra, $xb, $yb, $rb);
     
    $r = sqrt(($xb - $xa)*($xb - $xa) + ($yb - $ya)*($yb - $ya));
    if($r + $ra < $rb){
        echo "C1  is in C2\n";
        continue;
    }
    if($r + $rb < $ra){
        echo "C2  is in C1.\n";
        continue;
    }
     
    if($r <= $ra + $rb){
        echo "Circumference of C1  and C2  intersect.";
        continue;
    }
    echo "C1 and C2 do not overlap.\n";
}
?>
