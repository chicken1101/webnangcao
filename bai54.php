<!-- Viết một chương trình PHP để tính và in ra tổng của hai số nguyên đã cho (lớn hơn hoặc bằng 0). Nếu số nguyên đã cho hoặc tổng có nhiều hơn 80 chữ số, hãy in "tràn". -->
<?php
fscanf(STDIN, '%d', $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, '%s', $a);
    fscanf(STDIN, '%s', $b);
    if (max(strlen($a), strlen($b)) > 80) {
        echo "overflow\n";
        continue;
    }
    $arr = array_fill(0, 81, 0);
    $a = sprintf('%081s', $a);
    $b = sprintf('%081s', $b);
    for ($j = 80; $j > 0; $j--) {
        $n = $arr[$j] + $a[$j] + $b[$j];
        if ($n >= 10) {
            $arr[$j] = substr($n, 1);
            $arr[$j - 1] += 1;
        } else {
            $arr[$j] = $n;
        }
    }
    $result = preg_replace('/^0+(\d+)$/', '$1', implode('', $arr));
    if (strlen($result) > 80) {
        echo "overflow\n";
    } else {
        echo $result, PHP_EOL;
    }
}
?>
