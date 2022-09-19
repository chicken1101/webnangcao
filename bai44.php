<!-- Viết chương trình PHP để in ra tổng các cặp số của một dãy số nguyên dương đã được sắp xếp bằng một số đã cho. -->
<?php
function find_Pairs($nums, $pair_sum) {
  $nums_pairs = "";
  for ($i = 0; $i <= count($nums); $i++) {
     for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
           $nums_pairs .= $nums[$i] . "," . $nums[$j] . ";";
        }
     }
  }
  return $nums_pairs;
}
$nums = array(0,1,2,3,4,5,6);
echo find_Pairs($nums, 7)."\n";
echo find_Pairs($nums, 5)."\n";
?>
