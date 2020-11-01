<?php 
$arr = $_GET['arr'];
$arr2 = explode("/", $arr); 

$a = $_GET['a'];// первая граница 
$b = $_GET['b']; //вторая граница 

echo"<br>Входной массив<pre>"; 
print_r($arr2);			
echo"</pre><br>";

//print_r($arr2);
//echo sizeof($arr2); 

for($i=0; $i < sizeof($arr2); $i++) {	
	$arr3[$i] = abs($arr2[$i]);//модуль от массива 
}

$max = max($arr3);//максимальный элемент по модулю массива 
$key_max = array_search($max, $arr3);//индекс максимального элемента 
echo "<br> максимальный по модулю элемент массива: [".$key_max."] => " . $max; 

for($i=0; $i < sizeof($arr2); $i++) { 
	if($arr2[$i]>0) { 
		$p = $arr2[$i]; //находим первый положительный элемент 
		break; 
	} 
}
$key_p = array_search($p, $arr2); //индекс положительного элемента 
echo"<br> первый положительный элемент массива: [".$key_p."] => " . $p; 

$summa = 0;
for($key_p; $key_p < sizeof($arr2); $key_p++) {
	$summa += $arr2[$key_p]; //сумма элементов после первого положительного элемента 
} 

echo "<br> сумма элементов после первого положительного элемента: " . $summa . "<br><br>"; 

for($i=0; $i < count($arr2); $i++) {
	if( ($arr2[$i] > $a) && ($arr2[$i] < $b)) {
		$ab[] = $arr2[$i];//массив отрезка a,b 
	} else {
		$xx[] = $arr2[$i];// массив остальных элементов 
	} 
} 
echo"<br>Массив чисел, который попал в интервал<pre>";
print_r($ab);
echo"</pre><br>Массив чисел, который не попал в интервал<pre>"; 
print_r($xx);			
echo"</pre><br>"; 


echo"<br>"; 
echo"<br> первая граница:".$a; 
echo"<br> вторая граница:".$b; 
echo"<br>"; 
	$abxx = array_merge($ab, $xx);
echo"<br>Слияние двух предыдущих массивов<pre>"; 
print_r($abxx);			
echo"</pre><br>";
?>