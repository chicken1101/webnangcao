<!--Viết một chương trình PHP để tìm ký tự không lặp lại đầu tiên trong một chuỗi đã cho.-->
<?php
 function find_non_repeat($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}

echo find_non_repeat("Green")."\n";
echo find_non_repeat("abcdea")."\n";
?>
