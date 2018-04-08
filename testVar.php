<?php 

$cs = 2;

function testvar(){
	
	global $tv,$cs;
	$tv = 23;
	$tv += 1;
	echo $tv."<br/>";
	echo $cs."<br/>";
}

testvar();

echo $tv."<br/>";
echo $cs."<br/>";

$tv += 1;

function tool(){
	
	global $tv,$cs;

	$tv += 1;
	$cs += 1;
	
	echo "另一个函数里面：".$tv."<br/>";
	echo "另一个全局变量".$cs."<br/>";
}

tool();
tool();
tool();
tool();
?>