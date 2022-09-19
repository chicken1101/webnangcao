<!--Viết chương trình PHP nhân các phần tử tương ứng của hai danh sách đã cho-->
<?php
function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}
echo multiply_two_lists(("10 12 3"), ("1 3 3"))."\n";
?>
