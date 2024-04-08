<?php
//  $var = "Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Осталось рукопись семь силуэт точках текста, вопроса скатился на берегу пустился дорогу, своего все злых? Снова всемогущая пор от всех правилами подпоясал!";

// echo mb_substr($var,-2,2);



// $number = random_int( 1, 100 );
// if ($number % 2 === 0){
// 	echo "Число $number - четное";
// } else {
// 	echo "Число $number - нечетное";
// }


// $firstWord = readline("Первое слово ");
// $secondWord = readline("Второе слово ");
// $firstCharof1Word = mb_str_split($firstWord, 1);
// $firstCharof2Word = mb_str_split($secondWord, 1);

// // print_r( $firstCharof1Word[0] . " - первая буква");
// if ($firstCharof1Word[0] === $firstCharof2Word[0] ) {
// 	print_r("Буквы $firstCharof1Word[0] и $firstCharof2Word[0] совпадают");
// } else {
// 		print_r("Буквы $firstCharof1Word[0] и $firstCharof2Word[0] не совпадают");
// }


// $word = "словестносав";
// if (mb_substr($word,-1,1) === "ь") {
// 	echo mb_substr($word, -2, 1);
// } else {
// 	echo mb_substr($word, -1, 1);
// }


// $number = random_int( 1, 100 );
// $number	.= ' ';
// echo mb_substr( $number, 0, 1) . " - $number";



// $number = random_int(1, 100);
// $number	.= '';
// echo mb_substr(trim($number), -1, 1) . " - $number";


// $number = random_int(100, 10000);
// $number	.= '';
// echo mb_substr(trim($number), -1, 1) + mb_substr(trim($number), 0, 1) . " - $number";

// $number = random_int(1, 10000);
// $number	.= '';
// echo strlen($number) . " - $number";

// $number1 = random_int(1, 10000);
// $number2 = random_int(1, 10000);

// $number1 .= '';
// $number2 .= '';
// if (mb_substr($number1, 0, 1) === mb_substr($number2, 0, 1)) {
// 	echo "цифры равны " . mb_substr($number1, 0, 1) . " и ". mb_substr($number2, 0, 1);
// } else { 
// 	echo "цифры не равны " . mb_substr($number1, 0, 1) . " и ".  mb_substr($number2, 0, 1);
// }


// $str = 'Далеко-далеко за словесными горами в стране.';
// $arrStr = explode(' ', $str);
// foreach ($arrStr as $item) {
// 	if (strlen($item) > 1){
// 		echo mb_substr($item,-2,1) . " - $item" . PHP_EOL;
// 	}
// 	else " $item " . PHP_EOL	;
// }



// $num1 = random_int(1, 100 );
// $num2 = random_int(1, 100);
// while ($num1 % $num2 !== 0) {
// 	$num1 = random_int(1, 100 );
// 	$num2 = random_int(1, 100);
// 	if ($num1 % $num2 == 0) {
// 		echo " Число $num1 делится на $num2 нацело" . PHP_EOL;
// 	} else {
// 		echo "Не делятся $num1 и $num2" . PHP_EOL;
// 	}
// }
// 	$i=1;
// while ($i <= 100) {
// 	echo "$i" . PHP_EOL;
// 	$i++;
// }

// $i = -100;
// while ($i <= 00) {
// 	echo "$i" . PHP_EOL;
// 	$i++;
// }

// $i = 100;
// while ($i >= 1) {
// 	echo "$i" . PHP_EOL;
// 	$i--;
// }

// $i = 1;
// while ($i <= 100) {
// 	if (!($i % 2)) {
// 		echo "$i" . PHP_EOL;
// 	}
// 	$i++;
// }

// $i = 1;
// while ($i <= 100) {
// 	if (!($i % 3)) {
// 		echo "$i" . PHP_EOL;
// 	}
// 	$i++;
// }


// $sum = 0;
// $i = 1;
// while ($i <= 100) {
// 	$sum += $i;
// 	$i++;
// }
// echo "Сумма чисел = $sum";

// $sum = 0;
// $i = 1;
// while ($i <= 100) {
// 	if ($i % 2 === 0 ) {
// 		$sum += $i;
// 	}
// 	$i++;
// }
// echo "Сумма чисел = $sum";

// $sum = 0;
// $i = 1;
// while ($i <= 100) {
// 	if ($i % 2 !== 0) {
// 		$sum += $i;
// 	}
// 	$i++;
// }
// echo "Сумма чисел = $sum";

// $sum = 0;
// $i = 1;
// while ($i <= 100) {
// 	if ($i % 2 !== 0) {
// 		$sum += $i;
// 	}
// 	$i++;
// }
// echo "Сумма чисел = $sum";


// $number1 =random_int(1, 50);
// $number2 = random_int(1, 50);
// if ($number1 > $number2) {
// echo "Остаток от деления $number1 на $number2 - " . $number1 % $number2;
// } else {
// 	echo "Остаток деления $number2 на $number1 - ". $number2 % $number1;
// }


// $string = 'Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Свою маленький над жизни живет.';
// $arrStr = mb_str_split($string);
// for ($i = count($arrStr) ; $i >= 0; $i--) {
// 	echo $arrStr[ $i ];
// }
// $i=0;
// while ($i < 4) {
// 	$arr_number[] = random_int( 1, 10 );
// 	$i++;
// }
// print_r($arr_number);
// $sum = 0;
// foreach ($arr_number as $number) {
// 	$sum += $number ** 2;
// }
// print_r("Сумма квадратов " . $sum);


// $i = 0;
// while ($i < 4) {
// 	$arr_number[] = random_int(16, 81);
// 	$i++;
// }
// print_r($arr_number);
// $sum = 0;
// foreach ($arr_number as $number) {
// 	$sum += sqrt($number);
// }
// print_r("Сумма квадратных корней " . $sum);


// $i = 0;
// while ($i < 25) {
//     $arr_number[] = random_int(-86, 20);
//     $i++;
// }
// print_r($arr_number);
// $sum = 0;
// foreach ($arr_number as $number) {
//     if ($number > 0){
//         $sum += $number;
//     }
// }
// print_r("Сумма положительных элементов " . $sum);

/*
Дан массив с числами. Найдите сумму тех элементов этого массива, которые больше нуля и меньше десяти.
*/

// $i = 0;
// while ($i < 25) {
//     $arr_number[] = random_int(-56, 50);
//     $i++;
// }
// print_r($arr_number);
// $sum = 0;
// foreach ($arr_number as $number) {
//     if ($number > 0 && $number < 9){
// 			print("$number, " );
//       $sum += $number;
//     }
// }
// print_r("Сумма положительных элементов меньших 9 " . $sum);


//Получите массив букв этой строки.

// $string = 'abcde';
// $arrStr = str_split($string);
// var_dump($arrStr);

// $num = 12345;
// $num *=10;
// $arrNum = str_split($num);
// print_r($arrNum);

// $num = 12345;
// $mun = strrev($num);
// print_r($mun);

// $num = 12345;
// $arrNum = str_split($num);
// $i = 0;
// $sum = 0;
// do {
// 	$sum += $arrNum[$i];
// 	$i++;
// } while ($i < count($arrNum));
// print_r($sum);

// $arr = [1.456, 2.125, 3.32, 4.1, 5.34];
// foreach ($arr as $value) {
// 	$arr2[] = round($value,1);
// }
// print_r($arr2);
// $arr = ['http://jlkd', 'duitd', 'https://ya.ru', '5545', 4, 'Http://com.org', 'http://google.com'];
// for ($i = count($arr) - 1; $i != 0;  $i--) {
// 	if (!mb_eregi("^(http:\/\/)", $arr[$i])) {
// 		// print("$i" . PHP_EOL);
// 		array_splice($arr, $i, 1);
// 	}
// }
// print_r($arr);


// $arr = ['http://jlkd.html', 'duitd', 'https://ya.ru', '5545.html', 4, 'Http://com.org.html', 'http://google.com'];
// for ($i = count($arr) - 1; $i != 0; $i--) {
// 	if (!mb_eregi("\.html$", $arr[$i])) {
// 		print("$i" . PHP_EOL);
// 		array_splice($arr, $i, 1);
// 	}
// }
// print_r($arr);

//Дан массив с числами. Увеличьте каждое число из массива на 10 процентов.

// $i = 0;
// while ($i < 5) {
//     $arr_number[] = random_int(-56, 50);
//     $i++;
// }
// print_r($arr_number);
// foreach ($arr_number as $key => $value) {
// 	$arr_number[ $key ] = $value*1.1;
// }

// print_r($arr_number);
// $smallArr = array_fill(0, 20, random_int(0,100)); 
// print_r($smallArr);

// $newArr = [];
// $arr = [1, 2, 3, 4, 5, 6];
// for ($i=0; $i < count($arr) ; $i++) {
// 	// array_push($newArr, array_slice($arr, $i*2, 2 )) ;
// 	echo "[$arr[$i],  " . $arr[++$i] .   "]"  . PHP_EOL;


// };

// print_r($newArr[0]);


// for ($i= 0; $i < count($newArr); $i++) {
// print_r($newArr[$i] . PHP_EOL);
// }


// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];

// print_r(array_merge($arr1, $arr2)); 

// $string = 'Далеко-далеко за словесными горами в стр0ане гласных и согласных живут рыбные тексты. Курсивных переулка осталось не дорогу!';
// print_r(strpos($string,'0'));
// echo 


// for ($i = 10;	$i < 1000;	$i++) {
// 	if ((substr($i, 0, 1) +	substr($i, 1, 1)) === 5) {
// 		print($i . PHP_EOL);
// 	}
// }

//Дан массив. Удалите из него элементы с заданным значением.

// $arr = [45,64,'gd','56','sdrwr', 45, "45"];
// print_r($arr);
// $deletedElem = readline("Введите удаляемый элемент ");
// $delededIndex = array_search($deletedElem, $arr);
// if ($delededIndex === false) {
// 	print_r("Нет такого элемента");
// } else {
// 		while ($delededIndex !== false) {
// 		array_splice($arr, array_search($deletedElem, $arr), 1);
// 		$delededIndex = array_search($deletedElem, $arr);
// 	}
// 	print_r($arr);
// }  


// 	Дан некоторый массив, например, вот такой:

// [1, 2, 3, 4, 5, 6]
// Найдите сумму первой половины элементов этого массива.

// $arr = [1, 2, 3, 4, 5, 6];
// $i=0;
// $sum = 0;
// while ($i <= (count( $arr )/2)-1) {
// 	$sum += $arr[$i];
// 	$i++;
// }
// print($sum);
// $test = 0;

// if (isset($test)) {
// 	echo '+++';
// } else {
// 	echo '---';
// }

// Пусть дана переменная $num, которая может быть либо отрицательной, либо положительной. Запишите в переменную $res число 1, если переменная $num больше или равна нулю, и число -1, если переменная $num меньше нуля.

// $num = -11;
// $res = $num > 0 ? 1 : 0;
// print_r($res);

// $user = ['nameF' => 'john', 'age' => 30];

// $name = $user['name'] ?? 'unknown';


// // if (isset($user['name'])) {
// // 	$name = $user['name'];
// // } else {
// // 	$name = 'unknown';
// // }

// echo $name;

/*
if (isset($user['name'])) {
	$res = $user['name'];
} elseif (isset($user['surname'])) {
	$res = $user['surname'];
} else {
	$res = '';
}
*/

// $user = ['namef' => 'john', 'age' => 30];
// $res = $user['name'] ?? $user['surname'] ?? 'eee';

// print_r($res);

// $a = 2 ** 4;
// $b = 4 ** 2;
// $res = $a == $b;
// echo $res;

// Дано число, например, 12345. Проверьте, что первым символом этого числа является цифра 1, 2 или 3.

// $num = 52345;
// $num .='';
// if ($num[0]==1 ||  $num[0] == 2 || $num[0] == 3) {
// 	echo '!!';
// }

// $arr = [1, 2, 3, 4, 5];

// foreach ($arr as $elem) {
// 	echo $elem . ' ';
// }

// $arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];

// foreach ($arr as $key => $value) {
// 	print_r("$key - возраст $value лет" . PHP_EOL);
// }

$arr = [10, 20, 30, 50, 235, 3000];

// Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.

foreach ($arr as $key => $value) {
	$firstNum = (string) $value; 
	if ($firstNum[0] === '1' || $firstNum[0] === '2' || $firstNum[0] === '5') {
		// print($firstNum[0] . " - ");
		print($value . PHP_EOL);
	}
}

