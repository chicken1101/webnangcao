<!-- Viết chương trình PHP để tìm tổng lớn nhất của dãy con liền kề từ một dãy số a1, a2, a3, ... an đã cho. Một dãy con của một phần tử cũng là một dãy con liên tục. -->
<?php
while($line = fgets(STDIN)){
	$n = intval($line);
	if($n == 0){
		break;
	}	
	$arr = array();
	$max_val = array();
	for($i = 0; $i < $n; $i++){
		$x = intval(fgets(STDIN));
		$arr[$i] = 0;
		$max_val[$i] = -1000000;
		for($j = 0; $j <= $i; $j++){
			$arr[$j] += $x;
			if($max_val[$j] < $arr[$j]){
				$max_val[$j] = $arr[$j];
			}
		}
	}
	
	echo max($max_val)."\n";
}
?>
