<!-- Viết một chương trình PHP để tính số chữ số của tổng của hai số nguyên đã cho. -->
<?php
 while(true) {
    $inputs = explode(' ', trim(fgets(STDIN))); 
    if (!is_array($inputs) || count($inputs) < 2) {
        exit;
    } 
    $a = $inputs[0];
    $b = $inputs[1]; 
    $d = numDigits($a + $b);
    echo("Digit number of sum of two given integers: ");
    echo $d . "\n";
} 
function numDigits($n) {
    return (int)(log10($n) + 1);
}
?>
