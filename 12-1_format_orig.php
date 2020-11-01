<?php 
$arr = $_POST['arr']; 
$arr2 =  explode("/", $arr); 

$a = $_POST['a'];// первая граница 
$b = $_POST['b']; //вторая граница 

print_r($arr2);
echo sizeof($arr2); 

for($i=0; $i < sizeof($arr2); $i++) { 
	$arr3[$i] = abs($arr2[$i]);//модуль от массива 
} 

$max = max($arr3);//максимальный элемент по модулю массива 
$key_max = array_search($max, $arr3);//индекс максимального элемента 
echo "<br> максимальный по модулю элемент массива:[" . $key_max . "] => " . $max; 

for($i=0; $i < sizeof($arr2); $i++) { 
	if($arr2[$i] > 0) { 
		$p = $arr2[$i];//находим первый положительный элемент 
		break; 
	} 
} 
$key_p = array_search($p, $arr2);//индекс положительного элемента 
echo "<br>первый положительный элемент массива: [" . $key_p . "] => " . $p; 

for($key_p; $key_p < sizeof($arr2); $key_p++) { 
	$summa += $arr2[$key_p];//сумма элементов после первого положительного элемента 
} 
echo "<br> сумма элементов после первого положительного элемента:".$summa; 

$j=0;
$k=0;

echo count($arr2);

for($i=0; $i<count($arr2); $i++) { 
	if($arr2[$i] > $a && $arr2[$i] < $b) { 
		$ab[$j] = $arr2[$i];//массив отрезка a,b 
		$j = $j++;
		echo $j;
	} else { 
		$xx[$k] = $arr2[$i];// массив остальных элементов 
		$k = $k++;
		echo $k;
	} 
} 
echo"<br>"; 
echo"<br> первая граница:".$a; 
echo"<br> вторая граница:".$b; 
echo"<br>"; 
	for($i=0; $i<$j-1; $i++){
		$abxx[$i]=$ab[$i];
	}
	for($i=j;$i<$j+$k-1;$i++){
		$abxx[$i]=$xx[$i];
	}
	print_r($abxx)
?>