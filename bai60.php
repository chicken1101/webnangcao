<!-- Viết một chương trình PHP để in các giá trị chế độ từ một dãy số nguyên cho trước. Giá trị chế độ là yếu tố xảy ra thường xuyên nhất. Nếu có một số giá trị chế độ, hãy in chúng theo thứ tự tăng dần. -->
<?php
$hoge=array();
while($hoge[]=trim(fgets(STDIN))){}
$hage=array_count_values($hoge);
$max = max($hage);
$koge= array_keys($hage,$max);
echo "Mode values (in ascending order):\n";
sort($koge,SORT_ASC);
foreach ($koge as $val) {
    echo $val.PHP_EOL;
}
?>
