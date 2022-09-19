<!-- Viết một chương trình PHP chấp nhận sáu số làm đầu vào và sắp xếp chúng theo thứ tự giảm dần. -->
<?php
$stdin = trim(fgets(STDIN));
$nums = explode(" ", $stdin);
rsort($nums);
print("After sorting the said integers:\n");
echo implode(' ', $nums);
?>
