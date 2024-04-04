<?php
// echo __SERVER__;
// phpinfo();
	echo 'Строка: ' . __LINE__  .  PHP_EOL;
	echo 'Файл: ' . __FILE__ . PHP_EOL;
	$a = 'Рыба';
	$b = 'человек';

	echo $a . ' рыбою сыта, а ' . $b . ' человеком';

	// $variable = 3.14;
	// $variable = 3;
	// $variable = 'one';
	// $variable = true;
	// $variable = null;
	$variable = [];
	echo PHP_EOL;
	if (is_bool($variable)) {
		$type = 'bool';
	} elseif (is_float($variable)) {
		$type = 'float';
	} elseif (is_int($variable)) {
		$type = 'int';
	} elseif (is_string($variable)) {
		$type = 'string';
	} elseif (is_null($variable)) {
		$type = 'null';
	} else $type = 'other';
	echo "type is $type";
	
	
	?>
	<h1 class="title">Lorem, ipsum.</h1>