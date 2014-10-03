<?php
$array = file("hd2013.csv");

foreach ($array as $key => $var){
	$array[$key] = explode(',', $var);
}


echo ($array[$key[2]]);
?>