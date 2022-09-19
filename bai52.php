<!-- Viết chương trình PHP để in ra một số các số nguyên tố nhỏ hơn hoặc bằng một số nguyên cho trước. -->
<?php

$a = array_fill(0, 1000000, true);
$a[0] = $a[1] = false;
 
for($i = 2; $i * $i < 1000000; $i++){
    if(!$a[$i]) continue;
    for($j = $i * $i; $j < 1000000; $j += $i){
        $a[$j] = false;
    }
}
 
$sum = array_fill(0, 1000000, 0);
 
for($i = 1; $i < 1000000; $i++){
    $sum[$i] += $sum[$i - 1];
    if($a[$i]) $sum[$i]++;
}
 
while(fscanf(STDIN, "%d", $n)){
    echo "Number of prime numbers which are less than or equal to n: ";
    echo $sum[$n] . "\n";
}
?>
