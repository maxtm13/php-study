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


$string = 'Далеко-далеко, за словесными горами в стране гласных и согласных живут рыбные тексты. Свою маленький над жизни живет.';
$arrStr = mb_str_split($string);
for ($i = count($arrStr) ; $i >= 0; $i--) {
	echo $arrStr[ $i ];
}