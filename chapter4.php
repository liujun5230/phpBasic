<?php

echo("=======文档4-5.php 68页=======<br/>");
echo("__FILE__:".__FILE__."<br/>");
echo("__LINE__:".__LINE__."<br/>");
echo("__LINE__:".__LINE__."<br/>");
echo("PHP_VERSION:".PHP_VERSION."<br/>");
echo("PHP_OS:".PHP_OS."<br/>");
echo("E_ERROR:".E_ERROR."<br/>");
echo("E_WARNING:".E_WARNING."<br/>");
echo("E_PARSE:".E_PARSE."<br/>");
echo("E_NOTICE:".E_NOTICE."<br/><br/>");


echo("=======文档4-6.php 69页=======<br/>");
define("COPYRIGHT","Copyright &copy; 2006,www.rzpt.cn");
echo "define(COPYRIGHT)".COPYRIGHT."<br/><br/>";

echo("=======文档4-8.php 73页=======<br/>");
$arr=array(
	0 => 6,
	2 => 6.666e2,
	1 => "只是PHP而已",
	"str" => "string"
);
for($i=0;$i<count($arr);$i++){
	$print = each($arr);
	echo "$print[value]<br/>";
}
echo "<br/>";
$arr = array(6,6.666e2,"我知道，这是PHP","string");
for($i=0;$i<4;$i++){
	echo $arr[$i]."<br/>";
}
echo "<br/><br/>";

echo("=======文档4-19.php 94页=======<br/>");

function factorial($n){
	
	$result = 1;
	for($i=2;$i<=$n;$i++){
		$result *= $i;
	}
	return $result;
}

for($i=1;$i<=10;$i++){
	echo factorial($i)."<br/>";
}
echo "<br/><br/>";


echo("=======文档4-25.php 102页=======<br/>");
echo("局部变量和全局变量示例输出：<br/>");

$var1 = 6;
echo "在函数外面输出定义的局部变量\$var1=".$var1."<br/>";
//include("a.php");
function myfun1(){
	echo "在fun1函数中输出局部变量\$GLOBALS[\$var1]=".$GLOBALS["var1"]."<br/>";
}
myfun1();

function myfun2(){
	echo "在fun2函数中输出局部变量\$var1=".$var1."<br/>";
}
@myfun2();

global $var2;
$var2 = 8;
echo "<br/>输出定义的全局变量 global \$var2=".$var2."<br/>";

function fun3(){
	global $var3;
	$var3 = 9;
	global $var2;
	$var4 = 24;
	echo "<br/>在fun3函数中，输出fun3函数中定义的局部变量\$var4=".$var4;
	echo "<br/>在fun3函数中,输出在fun3函数中定义的全局变量\$var3=".$var3;
	echo "<br/>在fun3函数中，输出fun3函数外定义的全局变量\$var2=".$var2;
}
fun3();

function fun4(){
	global $var3;
	echo "<br/>在fun4函数中,输出在<b>fun3</b>函数中定义的全局变量\$var3=".$var3;
	echo "<br/>在fun4函数中,输出在<b>fun3</b>函数中定义的<b>局部</b>变量\$var4=".$var4;
}
@fun4();

echo "<br/><br/>在fun3函数<b>外</b>，输出fun3函数中定义的全局变量global \$var3=".$var3."<br/><br/><br/>";



echo("=======静态变量的例子=======<br/>");

static $staticvar;
$staticvar = 3;

function fun5(){
	global $staticvar;
	for($i=0;$i<10;$i++){
		$staticvar += 1;
	}
	echo "<br/>静态变量累加10次的结果：".$staticvar."<br/>";
}
fun5();
fun5();
fun5();
fun5();

function fun6(){
	global $staticvar;
	echo "<br/>fun6静态变量累加结果：".$staticvar."<br/><br/>";
}

fun6();



echo("=======引用变量的例子=======<br/>");
$value1 = "刘俊"; $value2;
$value2 =& $value1;
$value1 =& $value2;
echo "\$value1=\"刘俊\";<br/>\$value2 =& \$value1<br/><br/>";
echo "V1:".$value1."  V2:".$value2."<br/><br/>";

echo
$value2 = "老婆";

echo "V1:".$value1."  V2:".$value2."<br/>";

$value1 = "书毅";

echo "V1:".$value1."  V2:".$value2;
?>