<?php

function fn1()
{
	echo "task 1<br>";
	echo "task 2<br>";
}
//fn1();


function fn2($c,$d)
{
	echo $c+$d;
}
$a = 1;
$b = 2; 
//fn2($a,$b);

function fn3($c,$d)
{
	$e = $c+$d;
	return $e;
}

$f = fn3($a,$b);
echo $f;
