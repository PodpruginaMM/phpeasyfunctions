<!DOCTYPE html>
<html>
<head>
	<title>Lesson2 Podprugina</title>
</head>
<body>
<?php
echo "1)   ";
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//Если $a и $b положительные, вывести их разность.
//Если $а и $b отрицательные, вывести их произведение.
//Если $а и $b разных знаков, вывести их сумму.
//Ноль можно считать положительным числом.
$a = -4;
$b = -8;
if((0 <= $a) && (0 <= $b)) {
	$c = $a - $b;
	echo $c;
} elseif (($a < 0) && ($b < 0)){
	$c = $a * $b;
	echo $c;
} elseif ((0 <= $a && $b < 0) || ($a < 0 && 0 <= $b)){	
  $c = $a + $b;
  echo $c;
}

//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
//switch организовать вывод чисел от $a до 15.
echo "<br>2)   ";

$a = 3;
switch($a) {
	case 1:
		echo 1;
	case 2:	
		echo 2;
	case 3:
		echo 3;
	case 4:
		echo 4;
	case 5:
		echo 5;
	case 6:
		echo 6;
	case 7:
		echo 7;
	case 8:
		echo 8;
	case 9:
		echo 9;
	case 10:
		echo 10;
	case 11:
		echo 11;
	case 12:
		echo 12;
	case 13:
		echo 13;
	case 14:
		echo 14;
		break;
	default:
	echo "please choose a digit from 0 to 14";
	break;		
}

//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function mySum($a,$b){
	return $a + $b;
}
function myMin($a,$b){
	return $a - $b;
}
function myMul($a,$b){
	return $a * $b;
}
function myDiv($a,$b){
	return $a / $b;
}

echo "<br>3)   ";
echo mySum(2,10);

//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). 

function mathOperation($arg1,$arg2,$operation){
	switch($operation){
		case "sum":
			return $arg1 + $arg2;
			break;
		case "minus":
			return $arg1 - $arg2;
			break;
		case "multiply":
			return $arg1 * $arg2;
			break;
		case "divide":
			return $arg1 / $arg2;
			break;
	}
}
echo "<br>4)   ";
echo mathOperation(2,8,"divide");

//Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
echo "<br>5)   ";
echo date("o");

?>
</body>
</html>